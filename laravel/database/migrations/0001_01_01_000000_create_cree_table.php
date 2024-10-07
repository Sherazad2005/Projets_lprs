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
        Schema::create('cree', function (Blueprint $table) {
            $table->int('ref_event');
            $table->int('ref_utilisateur');
        });
    }

    public function down()
    {
        Schema::dropIfExists('cree');
    }
};
