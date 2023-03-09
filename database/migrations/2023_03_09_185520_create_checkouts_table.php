<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCheckoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checkouts', function (Blueprint $table) {
            $table->id();
            $table->string("name")->nullable();
            $table->string("amount")->nullable();
            $table->string("email")->nullable();
            $table->string("phone")->nullable();
            $table->string("city")->nullable();
            $table->string("street")->nullable();
            $table->string("checkout_id")->nullable();
            $table->string("transaction_id")->nullable();
            $table->integer("status")->default(0);
            $table->text("items")->nullable();
            $table->text("message")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('checkouts');
    }
}
