<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteStoreRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'name' => 'required|string',
            'phone' => 'required|integer',
            'gender' => 'nullable|string',
            'email' => 'nullable|string'
        ];
    }
}
