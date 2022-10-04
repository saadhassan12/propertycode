<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLandlord extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('landlords', function (Blueprint $table) {
            $table->id()->foreignkey();
            $table->string("full_name");
            $table->string("email");
            $table->string("number");
            $table->string("identity");
            $table->string("image");
            $table->string("address");
            $table->string("occupation");
            $table->string("account");
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
        Schema::dropIfExists('landlords');
    }
}
