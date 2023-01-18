<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SlideFormRequest extends FormRequest
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
            'slider' => 'required',
            'titulo' => 'required',
            'subtitulo' => 'max:64',
            'descripcion' => 'required|max:128',
            'redireccion' => 'max:128',
        ];
    }
}
