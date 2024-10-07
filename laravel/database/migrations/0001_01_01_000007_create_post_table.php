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
        Schema::create('post', function (Blueprint $table) {
            $table->int('ref_utilisateur');
            $table->int('ref_forum');
        });
    }

    public function down()
    {
        Schema::dropIfExists('post');
    }
};
