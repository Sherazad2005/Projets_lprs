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
        Schema::create('reponse', function (Blueprint $table) {
            $table->int("id_reponse");
            $table->string('messages');
            $table->date('date_messages');
            $table->time('heure_message');
            $table->int('ref_forum');
        });

        Schema::create('reponse1', function (Blueprint $table) {
            $table->int('ref_utilisateur');
            $table->int('ref_reponse');
        });

    }

    public function down()
    {
        Schema::dropIfExists('reponse');
        Schema::dropIfExists('reponse1');
    }
};
