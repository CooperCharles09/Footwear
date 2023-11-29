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
        Schema::create('regestrations', function (Blueprint $table) {
            $table->id();
            $table->string('Country')->nullable();
            $table->string('Name')->nullable();
            $table->string('Phone')->nullable();
            $table->string('Email')->nullable();
            $table->string('Password')->nullable();
            $table->string('Gender')->nullable();
            $table->string('DOB')->nullable();
            $table->string('Address')->nullable();
            $table->string('State')->nullable();
            $table->string('Pincode')->nullable();
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
        Schema::dropIfExists('regestrations');
    }
};
