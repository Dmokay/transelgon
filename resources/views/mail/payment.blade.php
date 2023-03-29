@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            Payment Received
        @endcomponent
    @endslot


    {{-- Body --}}
    # Hi

    Payment of KES: {{$checkout->amount}} with transaction ID: {{$checkout->transaction_id}}

    from:

    Name: {{$checkout->name}}
    Phone: {{$checkout->phone}}
    Email: {{$checkout->email}}
    City: {{$checkout->city}}
    Street: {{$checkout->street}}

    For Items:

    @component('mail::table')
        | Name       | Size         | Type         | Unit Price         | Quantity         |
        | :--------- | :------------- | :------------- | :------------- | :------------- |
        @foreach($checkout->decoded_items as $item)
            | {{$item->name}} | {{$item->size}}| {{$item->type}}| KES: {{$item->unit_price}}| {{$item->quantity}}
        @endforeach
    @endcomponent


    {{-- Subcopy --}}
    @isset($subcopy)
        @slot('subcopy')
            @component('mail::subcopy')
                {{ $subcopy }}
            @endcomponent
        @endslot
    @endisset

    {{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
            © {{ date('Y') }} {{ config('app.name') }}. @lang('All rights reserved.')
        @endcomponent
    @endslot
@endcomponent
