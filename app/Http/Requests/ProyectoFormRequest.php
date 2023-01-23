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
            'img_proyecto' => 'required',
            'nombre_proyecto' => 'required|max:100',
            'descripcion' => 'required|max:768',
            'objetivo' => 'required|max:100',
            'dirigido_a' => 'required|max:512',
            'certificado' => 'max:256',
            'fecha_inicio' => 'required',
            'duracion' => 'required|max:45',
            'duracion_clase' => 'max:45',
            'cupos' => 'max:3',
            'costo' => 'required|max:10',
            'promocion' => 'max:45',
            'dscr_docente' => 'required|max:256',
            'fotografia' => 'required',
            'nom_docente' => 'required|max:45',
        ];
    }
}
