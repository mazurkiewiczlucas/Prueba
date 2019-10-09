<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class servicio extends Model
{
     protected $fillable = [
       'tipo_de_service',
       'cantidad_de_horas_diarias',
       'dias_de_la_semana',
       'hora_de_inicio',
      'localidad_servicio',
      'precio_de_servicio',
      'comision',
      'estado_de_servicio',
      'user_id',
      'keeper',
      'service_id'];
}
