<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyunitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propertyunits', function (Blueprint $table) {
            $table->id()->foreignkey();
            $table->string("main");
            $table->string("title");
            $table->string("commission");
            $table->string("rent");
            $table->string("deposit");
            $table->string("details");
            $table->string("description");
            $table->string("image");
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
        Schema::dropIfExists('propertyunits');
    }
}
