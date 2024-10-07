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
        Schema::create('forum', function (Blueprint $table) {$table->id_utilisa();
            $table->int('id_forum');
            $table->string('messages');
            $table->date('date_messages');
            $table->time('heure_messages');
            $table->string('canal');

        });
    }

    public function down()
    {
        Schema::dropIfExists('forum');
    }
};
