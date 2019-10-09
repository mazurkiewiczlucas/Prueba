<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
  protected $fillable = [
    'user_id',
    'nombre',
    'apellido',
    'telefono',
    'celular',
    'email',
    'direccion',
    'localidad_servicio',
    'altura_direccion',
    'entrecalle1',
    'entrecalle2'];

    public $timestamp =false;
}
