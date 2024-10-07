<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('utilisateur', function (Blueprint $table) {
            $table->int("id_utilisateur");
            $table->string('nom');
            $table->string('prenom');
            $table->string('email')->unique();
            $table->string('mdp');
            $table->string('nom_promo');
            $table->string('cv');
            $table->string('secteur_activite');
            $table->string('classe');
            $table->string('specialite_prof');
            $table->string('poste_entreprise');
            $table->string('role');
            $table->int('ref_emplois');
        });
    }

    public function down()
    {
        Schema::dropIfExists('utilisateur');
    }
};
