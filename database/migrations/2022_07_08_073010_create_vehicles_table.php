<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string("owner_id");
            $table->string("chasis_number");
            $table->string("engine_number")->nullable();
            $table->string("registration_number");
            $table->string("year_of_make")->nullable();
            $table->string("vehicle_model")->nullable();
            $table->string("vehicle_make");
            $table->string("vehicle_colour")->nullable();
            $table->string("vehicle_type")->nullable();
            $table->string("commercial_type");
            $table->string("created_by")->nullable();
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
        Schema::dropIfExists('vehicles');
    }
}
