<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CategorieGerecht extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorie_gerecht', function (Blueprint $table) {
            $table->unsignedBigInteger('gerecht_ID');
            $table->string('categorie');

            $table->foreign('categorie')->references('categorie')->on('categorie')->onDelete('cascade');
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
        schema::table('categorie_gerecht', function (Blueprint $table){
            $table->dropForeign('categorie_gerecht_categorie_foreign');
            $table->dropForeign('categorie_gerecht_gerecht_ID_foreign');
        });
        Schema::dropIfExists('categorie_gerecht');
    }
}
