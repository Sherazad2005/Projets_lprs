<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('utilisateur', function (Blueprint $table) {
            $table->id_utilisateur();
            $table->string('name');
            $table->string('prenom');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('nom_promo');
            $table->string('cv');
            $table->string('secteur_activité');
            $table->string('classe');
            $table->string('specialite_prof');
            $table->string('poste_entreprise');
            $table->string('role');
            $table->string('ref_emplois');
        });
    }
};
