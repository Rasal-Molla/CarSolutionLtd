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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('Customer_name', 50);
            $table->foreignId('user_id');
            $table->string('phone');
            $table->foreignId('service_center_id');
            $table->foreignId('brand_id');
            $table->string('model', 150);
            $table->foreignId('service_id');
            $table->string('special_request', 200)->nullable();
            $table->string('price', 150);
            $table->string('amount', 50);
            $table->double('advance_payment', 50);
            $table->double('due_payment', 50);
            $table->string('status')->default('Approved');
            $table->string('address');
            $table->string('transaction_id');
            $table->string('address_1')->nullable();
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
        Schema::dropIfExists('bookings');
    }
};
