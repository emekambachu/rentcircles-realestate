<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_countries', static function (Blueprint $table) {
            $table->id();
            $table->integer('phone_code');
            $table->string('country_code');
            $table->string('country_name');
            $table->string('continent_code')->nullable();
            $table->string('continent_name')->nullable();
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
        Schema::dropIfExists('property_countries');
    }
}
