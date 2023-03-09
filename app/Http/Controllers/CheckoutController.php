<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CheckoutController extends Controller
{
    public function pay(Request  $request){
        $checkout = Checkout::create([
            'amount'=>$request->amount,
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'city'=>$request->city,
            'street'=>$request->street,
            'message'=>$request->message,
            'items'=>$request->items
        ]);

        $response = $this->mpesaProcess($checkout->phone, $checkout->amount, $checkout->id);

        if ($response['status']){
            $checkout->update(['checkout_id'=>$response['data']['CheckoutRequestID'], 'status'=>1]);
            return redirect()->back()->withStatus("Complete transaction by entering PIN  in your phone");
        } else {
            $checkout->update(['status'=>-1]);
            return redirect()->back()->withError("AN Error Occurred! Try again later!");
        }
    }


    public function callback(Request $request)
    {
        Log::info("STKCallback: " . json_encode($request->all()));
        $data = $request["Body"]['stkCallback'];
        //dd($data['CallbackMetadata']['Item']);
        if ($data['ResultCode'] != 0) {

        } else {
            $checkout = Checkout::where('checkout_id', $data['CheckoutRequestID'])->firstOrFail();
            $data_items = $data['CallbackMetadata']['Item'];
            try {
                $checkout->update(['transaction_id'=>$data_items[1]['Value'], 'status'=>2]);
                //TODO send email
            } catch (\Exception $exception) {
                Log::error($exception->getMessage());
            }
        }
        return response()->json("OK");
    }

    private function generateToken(): array
    {
        $client = new Client();
        try {
            $response = $client->get("https://api.safaricom.co.ke/oauth/v1/generate",
                [
                    'debug' => false,
                    'auth' => ["mqNkVNmD4LtYqDNPDjN3GAGT9QlzA1gu", "4fXWf58ezdbrMuwE"],
                    'query' => ["grant_type" => "client_credentials"]
                ]);
            $body = $response->getBody();
            $body = json_decode((string)$body, true);
            return array('status' => true, 'data' => $body);
        } catch (RequestException $e) {
            //dd($e->getMessage());
            return array('status' => false, 'data' => $e->getMessage());
            if ($e->hasResponse()) {
                $exception = (string)$e->getResponse()->getBody();
                $decoded = \GuzzleHttp\json_decode($exception, true);
                return array('status' => false, 'data' => $decoded);
            }
        }
    }

    private function formatNumber($number, $strict = false)
    {
        $number = str_replace(' ', '', $number);
        //
        $first = substr($number, 0, 1);
        if ($first == '+')
            $number = substr($number, 1);

        if (strlen($number) == 12 && !$strict)
            return $number;
        //
        $first = substr($number, 0, 1);
        if ($first == 0)
            $number = substr($number, 1);

        $first254 = substr($number, 0, 3);
        if ($first254 == 254)
            $number = substr($number, 3);

        $number = (int)"254" . $number;

        return $number;
    }

    private function mpesaProcess($number, $amount, $id): array
    {
        $credentials = $this->generateToken();
        $phone = $this->formatNumber($number);
        Log::info($credentials);
        if (!$credentials['status'])
            return array('status' => false, 'data' => "An Error Occurred. Ensure you have valid MPESA Credentials!");
        $timeStamp = date("YmdHis");
        $password = base64_encode("6176531279cd69ad154b457160c84226698d2b6c8d9ddacf40546dc3f48b650963ff5de" . $timeStamp);
        $client = new Client();
        $payload = [
            "BusinessShortCode" => "6176531",
            "Password" => $password,
            "TransactionType" => "CustomerPayBillOnline",
            "Timestamp" => $timeStamp,
            "Amount" => (string)$amount,
            "PartyA" => $phone,
            "PartyB" => "6176531",
            "PhoneNumber" => $phone,
            "CallBackURL" => "https://safaricom.free.beeceptor.com/",
            //"CallBackURL" => url('callback/stk'),
            //"CallBackURL" => "https://gobeba.free.beeceptor.com",
            "AccountReference" => $id,
            "TransactionDesc" => "Pay Bill"
        ];
        Log::channel('mpesa')->info("STK Request: " . json_encode($payload));
        try {
            $response = $client->post("https://api.safaricom.co.ke/mpesa/stkpush/v1/processrequest", [
                // 'debug' => FALSE,
                'json' => $payload,
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Authorization' => 'Bearer ' . $credentials['data']['access_token']
                ]
            ]);
        } catch (RequestException $e) {
            if ($e->hasResponse()) {
                $exception = (string)$e->getResponse()->getBody();
                $decoded = \GuzzleHttp\json_decode($exception, true);
                Log::channel('mpesa')->info("STK Response: " . json_encode($decoded));
                return array('status' => false, 'data' => $decoded);
            } else {
                Log::error($e->getMessage());
                Log::error($e->getTraceAsString());
                return array('status' => false);
            }
        }

        $body = $response->getBody();
        Log::channel('mpesa')->info("Mpesa STK Push: Phone $phone  Response: $body");
        $body = json_decode((string)$body, true);
        return array('status' => true, 'data' => $body);
    }
}
