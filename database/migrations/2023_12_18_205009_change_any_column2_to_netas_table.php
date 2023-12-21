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
        Schema::table('netas', function (Blueprint $table) {
            $table->string('body')->nullable()->change();
            $table->string('keyword')->nullable()->change();
            $table->integer('access_count')->default(0)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('netas', function (Blueprint $table) {
            //
        });
    }
};
