<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->string('rut', 10)->nullable();
            $table->string('numfichaclinica', 255)->nullable();
            $table->string('nombres', 255)->nullable();
            $table->string('apellidopaterno', 255)->nullable();
            $table->string('apellidomaterno', 255)->nullable();
            $table->string('fechanacimiento', 255)->nullable();

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
        Schema::dropIfExists('pacientes');
    }
}
