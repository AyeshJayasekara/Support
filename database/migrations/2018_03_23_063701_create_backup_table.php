<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBackupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('backup', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('location');
            $table->string('question', 255);
            $table->string('subject', 255);
            $table->string('IP', 255);

            $table->string('cp', 255);
            $table->string('res', 255);
            $table->string('os', 255);
            $table->string('br', 255);
            $table->string('vr', 255);
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
        Schema::dropIfExists('backup');
    }
}
