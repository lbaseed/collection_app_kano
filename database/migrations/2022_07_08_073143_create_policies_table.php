<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePoliciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('policies', function (Blueprint $table) {
            $table->id();
            $table->string("policy_num")->nullable();
            $table->string("registration_number");
            $table->string("vehicle_id");
            $table->string("owner_id");
            $table->string("certificate_number")->nullable();
            $table->string("iei_ref")->nullable();
            $table->string("policy_type");
            $table->date("start_date")->nullable();
            $table->date("expiration_date")->nullable();
            $table->string("status");
            $table->string("vendor");
            $table->string("amount");
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
        Schema::dropIfExists('policies');
    }
}
