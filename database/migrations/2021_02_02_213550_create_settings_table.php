<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('email' , 255);
            $table->string('phone' , 30);
            $table->string('facebook' , 255)->mullable();
            $table->string('teittwer' , 255)->mullable();
            $table->string('instagram' , 255)->mullable();
            $table->string('youtube' , 255)->mullable();
            $table->string('linkedin' , 255)->mullable();
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
        Schema::dropIfExists('settings');
    }
}
