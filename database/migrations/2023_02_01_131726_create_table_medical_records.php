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

        Schema::create('medical_records', function (Blueprint $table) {
            $table->string('medical_record_id', 6)->primary();
            $table->unsignedBigInteger('id_pattient');
            $table->foreign('id_pattient')->references('id')->on('pattient')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('id_registration_officer');
            $table->foreign('id_registration_officer')->references('id')->on('registration_officers')->onUpdate('cascade');
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
        Schema::dropIfExists('medical_records');
    }
};
