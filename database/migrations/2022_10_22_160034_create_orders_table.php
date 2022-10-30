<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->integer('user_id');
            $table->integer('soluong');
            $table->string('firstsName',50);
            $table->string('lastName',50);
            $table->string('telephone',13);
            $table->string('address',150);
            $table->integer('money');
            $table->integer('product_id');
            // them 2 cai
            $table->tinyInteger('status');
            // $table->integer('quantity');


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
};
