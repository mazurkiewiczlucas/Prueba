<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('service_id')->nullable();
            $table->string('user_id');
            $table->string('tipo_de_service');
            $table->string('cantidad_de_horas_diarias');
            $table->string('dias_de_la_semana');
            $table->string('hora_de_inicio');
            $table->string('localidad_servicio');
            $table->string('precio_de_servicio');
            $table->string('keeper')->nullable();
            $table->string('comision');
            $table->string('estado_de_servicio');
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
        Schema::dropIfExists('servicios');
    }
}
