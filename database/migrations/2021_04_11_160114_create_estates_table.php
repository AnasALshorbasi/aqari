<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('city_id');
            $table->unsignedBigInteger('estate_type_id');
            $table->string('estate_name', 255);
            $table->integer('size');
            $table->integer('price');
            $table->decimal('floor_space', 8, 2);
            $table->integer('number_of_bedrooms');
            $table->integer('number_of_bathrooms');
            $table->integer('number_of_garages');
            $table->text('estate_description');
            $table->unsignedBigInteger('estate_status_id');
            $table->unsignedBigInteger('user_info_id');
            $table->string('address',255);
            $table->text('image');
            $table->integer('rating');
            $table->timestamps();


            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
            $table->foreign('estate_type_id')->references('id')->on('estate_types')->onDelete('cascade');
            $table->foreign('estate_status_id')->references('id')->on('estate_statuses')->onDelete('cascade');
            $table->foreign('user_info_id')->references('id')->on('user_infos')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estates');
    }
}
