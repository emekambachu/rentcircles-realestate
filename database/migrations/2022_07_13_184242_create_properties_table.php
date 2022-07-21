<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', static function (Blueprint $table){
            $table->id()->index();
            $table->unsignedBigInteger('realtor_id')->nullable();
            $table->string('owner')->nullable();
            $table->unsignedBigInteger('property_type_id');
            $table->string('service')->nullable();
            $table->string('title')->index();
            $table->unsignedBigInteger('state_id');
            $table->string('address');
            $table->text('description');
            $table->integer('bedrooms')->index();
            $table->integer('bathrooms');
            $table->integer('living_rooms');
            $table->integer('square_feet')->nullable();
            $table->integer('cost');
            $table->string('cost_period')->nullable();
            $table->text('features')->nullable();
            $table->binary('map')->nullable();
            $table->binary('video')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
}
