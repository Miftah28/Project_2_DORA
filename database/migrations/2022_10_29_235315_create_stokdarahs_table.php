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
        Schema::create('stokdarahs', function (Blueprint $table) {
            $table->id();
            $table->string('goldar');
            $table->integer('wb');
            $table->integer('prc');
            $table->integer('t');
            $table->integer('ffp');
            $table->dateTime('tglupdatestok');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stokdarahs');
    }
};
