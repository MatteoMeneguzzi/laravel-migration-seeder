<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travels', function (Blueprint $table) {
            $table->id();
            $table->string('title', 200);
            $table->tinyInteger('weeks')->unsigned();
            $table->string('address', 100);
            $table->string('city', 100);
            $table->string('state', 100);
            $table->smallInteger('square_meters')->unsigned();
            $table->tinyInteger('rooms')->unsigned();
            $table->text('description')->nullable();
            $table->smallInteger('price')->unsigned();
            $table->boolean('Is_available')->default(1);
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
        Schema::dropIfExists('travels');
    }
}
