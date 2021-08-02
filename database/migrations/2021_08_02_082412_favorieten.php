<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Favorieten extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favorieten', function (Blueprint $table) {
            $table->unsignedBigInteger('gerecht_ID');
            $table->unsignedBigInteger('user_ID');

            $table->foreign('user_ID')->references('user_ID')->on('users')->onDelete('cascade');
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
        schema::table('favorieten', function (Blueprint $table){
            $table->dropForeign('favorieten_user_ID_foreign');
            $table->dropForeign('favorieten_gerecht_ID_foreign');
        });
        Schema::dropIfExists('favorieten');
    }
}
