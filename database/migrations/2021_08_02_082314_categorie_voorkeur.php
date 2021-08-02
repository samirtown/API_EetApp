<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CategorieVoorkeur extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorie_voorkeur', function (Blueprint $table) {
            $table->string('categorie')->nullable();
            $table->unsignedBigInteger('user_ID')->nullable();

            $table->foreign('categorie')->references('categorie')->on('categorie')->onDelete('cascade');
            $table->foreign('user_ID')->references('user_ID')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::table('categorie_voorkeur', function (Blueprint $table){
            $table->dropForeign('categorie_voorkeur_categorie_foreign');
            $table->dropForeign('categorie_voorkeur_user_ID_foreign');
        });
        Schema::dropIfExists('categorie_voorkeur');
    }
}
