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
        Schema::create('emplois', function (Blueprint $table) {
            $table->int('id_emplois');
            $table->string('titre');
            $table->string('entreprise');
            $table->string('description');
        });
    }

    public function down()
    {
        Schema::dropIfExists('emplois');
    }
};
