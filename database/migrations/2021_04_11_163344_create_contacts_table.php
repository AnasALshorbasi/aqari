<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('owner_id');
            $table->unsignedBigInteger('estate_id');
            $table->unsignedBigInteger('user_id');
            $table->string('message', 255);
            $table->timestamps();

            $table->foreign('owner_id')->references('id')->on('user_infos')->onDelete('cascade');
            $table->foreign('estate_id')->references('id')->on('estates')->onDelete('cascade');
            $table->foreign('user_id')->references('User_id')->on('user_infos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
