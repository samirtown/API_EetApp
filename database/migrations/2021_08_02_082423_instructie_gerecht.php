<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InstructieGerecht extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instructie_gerecht', function (Blueprint $table) {
            $table->string('naam_instructie');
            $table->longText('beschrijving');
            $table->integer('stap');
            $table->unsignedBigInteger('gerecht_ID');

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
        schema::table('instructie_gerecht', function (Blueprint $table){
            $table->dropForeign('instructie_gerecht_gerecht_ID_foreign');
        });
        Schema::dropIfExists('instructie_gerecht');
    }
}
