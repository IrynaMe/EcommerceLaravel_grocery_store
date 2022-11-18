<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::create('orders', function (Blueprint $table) {
    $table->id();
    $table->string('Customer_id');
    $table->string('nome');
    $table->string('indirizzo');
    $table->string('citta');
    $table->mediumText('cart');
    $table->decimal('prezzo', $precision = 8, $scale = 2);
    $table->integer('stato');
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
        Schema::dropIfExists('orders');
    }
}
