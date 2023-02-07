<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PortafolioRequest extends FormRequest
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
            'nombre'=>'required|max:50',
            'descripcion'=>'required|string|max:50',
            'categoria'=>'required | string | max:15',
            'imagen'=>'required | max:2000 ',
            'url'=>'required | max:100',

        ];
    }
}
