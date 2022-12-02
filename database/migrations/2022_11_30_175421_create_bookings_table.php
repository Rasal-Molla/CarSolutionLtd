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
            $table->foreignId('customer_id')->constrained('users');
            $table->string('phone');
            $table->string('service_center');
            $table->string('brand');
            $table->string('model', 150);
            $table->foreignId('service');
            $table->string('special_request', 200)->nullable();
            $table->string('price', 150)->default('0.00');
            $table->string('status')->default('Pending');
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
