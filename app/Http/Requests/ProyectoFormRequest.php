<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProyectoFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'img_portada' => 'required',
            'img_curso' => 'required',
            'nombre_proyecto' => 'required|max:100',
            'descripcion' => 'required|max:2048',
            'objetivo' => 'required|max:100',
            'dirigido_a' => 'required|max:512',
            'certificado' => 'max:256',
            'fecha_inicio' => 'required',
            'duracion' => 'required|max:45',
            'duracion_clase' => 'max:45',
            'cupos' => 'max:3',
            'costo' => 'required|max:10',
            'promocion' => 'max:45',
            'descr_docente' => 'required|max:768',
            'fotografia' => 'required',
            'nom_docente' => 'required|max:45',
        ];
    }
}
