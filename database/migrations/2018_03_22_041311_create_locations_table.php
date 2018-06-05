<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255);
        });
        // Insert some stuff
        

        DB::table('locations')->insert([
            ['name' => 'C2-003'],
            ['name' => 'C2-002'],
            ['name' => 'C2-009'],
            ['name' => 'C2-102'],
            ['name' => 'C2-101'],
            ['name' => 'C2-005'],
            ['name' => 'C2-006'],
            ['name' => 'C2-007'],
            ['name' => 'C2-008'],
            ['name' => 'C2-107'],
            ['name' => 'C2-105'],
            ['name' => 'C2-106'],
            ['name' => 'C2-204'],
            ['name' => 'C2-205'],
            ['name' => 'C2-202'],
            ['name' => 'C2-203']
           
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locations');
    }
}
