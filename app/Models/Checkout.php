<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getDecodedItemsAttribute(){
        return json_decode($this->items);
    }

    protected $appends = ["decoded_items"];
}
