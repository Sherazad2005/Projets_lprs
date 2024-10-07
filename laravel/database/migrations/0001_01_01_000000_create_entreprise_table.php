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
        Schema::create('entreprise', function (Blueprint $table) {$table->id_utilisa();
            $table->int('id_entreprise');
            $table->string('nom');
            $table->string('prenom');
            $table->string('gerant');
            $table->string('adresse');
            $table->string('cp');

        });
    }

    public function down()
    {
        Schema::dropIfExists('entreprise');
    }
};
