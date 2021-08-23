<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Gerechten extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gerechten', function (Blueprint $table) {
            $table->id('gerecht_ID');
            $table->string('gerecht_naam');
            $table->integer('aantal_personen');
            $table->longText('afbeelding')->nullable();
            $table->string('categorie')->nullable();
            $table->unsignedBigInteger('user_ID')->nullable();
            $table->foreign('user_ID')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::table('gerechten', function (Blueprint $table){
            $table->dropForeign('gerechten_categorie_foreign');
            $table->dropForeign('gerechten_user_ID_foreign');
        });
        Schema::dropIfExists('gerechten');
    }
}
