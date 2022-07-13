<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOwnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('owners', function (Blueprint $table) {
            $table->id();
            $table->string("last_name");
            $table->string("other_names")->nullable();
            $table->string("gender")->nullable();
            $table->string("phone_num");
            $table->string("email")->nullable();
            $table->date("dob")->nullable();
            $table->text("address");
            $table->string("tin")->nullable();
            $table->string("occupation")->nullable();
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
        Schema::dropIfExists('owners');
    }
}
