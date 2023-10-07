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
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->string('order_id')->nullable();
            $table->json('up_pocket')->nullable();
            $table->json('up_collar')->nullable();
            $table->json('up_gola')->nullable();
            $table->json('up_plate')->nullable();
            $table->json('up_pasting')->nullable();
            $table->json('up_lace')->nullable();
            $table->json('up_ful')->nullable();
            $table->json('up_button')->nullable();
            $table->json('low_pocket')->nullable();
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
        Schema::dropIfExists('order_details');
    }
};
