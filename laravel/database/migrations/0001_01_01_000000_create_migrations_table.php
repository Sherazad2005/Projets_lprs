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
        Schema::create('migrations', function (Blueprint $table) {
            $table->int('id');
            $table->string('migration');
            $table->int('batch');
        });
    }

    public function down()
    {
        Schema::dropIfExists('migrations');
    }
};
