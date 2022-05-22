<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_details', static function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('realtor_id');
            $table->unsignedBigInteger('property_type_id');
            $table->string('title');
            $table->unsignedBigInteger('state_id');
            $table->string('address');
            $table->text('description');
            $table->integer('bedrooms');
            $table->integer('bathrooms');
            $table->integer('living_rooms');
            $table->integer('square_feet')->nullable();
            $table->integer('cost');
            $table->text('features')->nullable();
            $table->binary('map')->nullable();
            $table->binary('video')->nullable();
            $table->tinyInteger('status')->default(0);
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
        Schema::dropIfExists('property_details');
    }
}
