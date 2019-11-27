<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderCartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_cart', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('id_user');
            $table->integer('id_pro');
            $table->string('name');
            $table->string('img');
            $table->string('unit');
            $table->integer('price');
            $table->integer('qty');
            $table->integer('total');
            $table->softDeletes();
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
        Schema::dropIfExists('order_cart');
    }
}
