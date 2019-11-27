<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('id_user');
            $table->integer('id_pro');
            $table->string('name');
            $table->string('unit',10);
            $table->string('img');
            $table->integer('price');
            $table->integer('qty');
            $table->integer('total');
            $table->string('note');
            $table->string('date');
            $table->string('payment',20);
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
        Schema::dropIfExists('bill');
    }
}
