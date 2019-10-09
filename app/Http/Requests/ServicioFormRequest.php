<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServicioFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'tipo_de_service' => 'required';
            'cantidad_de_horas_diarias'=> 'required';
            'dias_de_la_semana'=> 'required';
            'hora_de_inicio'=> 'required';
            'localidad_servicio'=> 'required';
        ];
    }
}
