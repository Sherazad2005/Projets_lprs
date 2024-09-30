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
        Schema::create('event', function (Blueprint $table) {$table->id_utilisa();
            $table->int('id_event');
            $table->string('nom');
            $table->date('date');
            $table->string('inscrits');
            $table->string('gerant');

        });
    }

    public function down()
    {
        Schema::dropIfExists('event');
    }
};
