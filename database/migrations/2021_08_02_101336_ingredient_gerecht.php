<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class IngredientGerecht extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredient_gerecht', function (Blueprint $table) {
            $table->unsignedBigInteger('gerecht_ID');
            $table->string('aantal');
            $table->string('ingredient');
            $table->foreign('gerecht_ID')->references('gerecht_ID')->on('gerechten')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::table('ingredient_gerecht', function (Blueprint $table){
            $table->dropForeign('ingredient_gerecht_gerecht_ID_foreign');
        });
        Schema::dropIfExists('ingredient_gerecht');
    }
}
