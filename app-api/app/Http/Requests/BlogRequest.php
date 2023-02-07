<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
{
  
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title'=>'required|max:50',
            'author'=>'required|string|max:50',
            'brief'=>'required | string | max:150',
            'body'=>'required | max:3000 ',
            'status'=>'boolean',
        ];
    }
}
