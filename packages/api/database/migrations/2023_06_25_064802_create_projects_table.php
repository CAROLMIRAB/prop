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
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('image');
            $table->string('address');
            $table->integer('price');
            $table->json('specs');
            $table->unsignedBigInteger('offer_id')->nullable();
            $table->unsignedBigInteger('type_id');
            $table->unsignedBigInteger('place_id');
            $table->timestamps();

            $table->foreign('offer_id')->references('id')
                ->on('offers')->onDelete('cascade');
            $table->foreign('type_id')->references('id')
                ->on('types')->onDelete('cascade');
            $table->foreign('place_id')->references('id')
                ->on('places')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
};
