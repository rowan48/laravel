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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title'); //== varchar column
            $table->text('description'); //== text column
            $table->string('slug',50);
            $table->unsignedBigInteger('user_id')->nullable;
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('path')->nullable;
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
        Schema::dropIfExists('posts');
    }
};
