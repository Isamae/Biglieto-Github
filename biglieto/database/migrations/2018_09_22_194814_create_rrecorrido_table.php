<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRrecorridoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rrecorrido', function (Blueprint $table) {
            $table->increments('idRe');
            $table->string('provincia_O', 45);
            $table->string('provincia_D', 45);
            $table->string('canton_O', 45);
            $table->string('canton_D', 45);
            $table->string('direccion_O',100);
            $table->string('direccion_D',100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rrecorrido');
    }
}
