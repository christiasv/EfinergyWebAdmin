<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogFormRequest extends FormRequest
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
            'img_blog' => 'required',
            'titular' => 'required',
            'cod_user' => 'required',
            'fecha' => 'required',
            'descripcion' => 'required',
        ];
    }
}
