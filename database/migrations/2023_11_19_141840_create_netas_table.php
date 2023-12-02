<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('netas', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('movie_path');
            $table->string('url');
            $table->string('body');
            $table->string('keyword');
            $table->string('public_private');
            $table->integer('access_count');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('netas');
    }
};
