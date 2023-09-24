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
            $table->string('order_no')->default(0);
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->longText('address')->nullable();
            $table->string('up_long')->nullable();
            $table->string('up_body')->nullable();
            $table->string('up_bodyLose')->nullable();
            $table->string('pat')->nullable();
            $table->string('put')->nullable();
            $table->string('hattarLomba')->nullable();
            $table->string('hattarMuk')->nullable();
            $table->string('kaf')->nullable();
            $table->string('gola')->nullable();
            $table->string('plate_fara')->nullable();
            $table->string('collar_choura')->nullable();
            $table->string('plate_choura')->nullable();
            $table->string('ghar')->nullable();
            $table->string('hif')->nullable();
            $table->string('nich_hata')->nullable();
            $table->string('madani_fara')->nullable();
            $table->string('mota_mor')->nullable();
            $table->string('hata_pasting')->nullable();
            $table->string('up_pocket')->nullable();
            $table->string('up_collar')->nullable();
            $table->string('up_gola')->nullable();
            $table->string('up_plate')->nullable();
            $table->string('up_pasting')->nullable();
            $table->string('up_lace')->nullable();
            $table->string('up_ful')->nullable();
            $table->string('up_button')->nullable();
            // ----------------low part-------------
            $table->string('low_long')->nullable();
            $table->string('low_muk')->nullable();
            $table->string('low_hie')->nullable();
            $table->string('low_ghar')->nullable();
            $table->string('low_komor')->nullable();
            $table->string('low_belt')->nullable();
            $table->string('low_hif')->nullable();
            $table->string('low_pocket')->nullable();
            // --------------deilivery info----------------
            $table->string('cost')->nullable();
            $table->string('nogod')->nullable();
            $table->date('order_date')->nullable();
            $table->string('d_date')->nullable();
            $table->longText('up_message')->nullable();
            $table->longText('low_message')->nullable();

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
