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
        Schema::create('service_centers', function (Blueprint $table) {
            $table->id();
            $table->string('name', 150); //Service center name
            $table->string('email', 50)->unique(); // Service center email
            $table->string('phone', 50)->unique(); //Service center phone
            $table->string('location', 200); // Service center location
            $table->string('service_type', 150); 
            $table->string('service_hour', 150);
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
        Schema::dropIfExists('service_centers');
    }
};
