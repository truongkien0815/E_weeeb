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
        // them 
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            
           
            $table->string('review_name',50);
            $table->string('review_email',50);
            $table->string('comment_content',200);
            $table->integer('product_id');
            $table->integer('rating');
          
            
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
        Schema::dropIfExists('comments');
    }
};
