<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertydetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propertydetails', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("rent");
            $table->string("type");
            $table->string("landlord");
            $table->string("area");
            $table->string("agency");
            $table->string("deposit");
            $table->string("description");
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
        Schema::dropIfExists('propertydetails');
    }
}
