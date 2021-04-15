<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            //
            'name' => 'string|required|max:250',
            'dni' => 'string|required|unique:clients|max:11|min:11',
            'ruc' => 'string|required|unique:clients|max:11|min:11',
            'address' => 'string|required|max:250',
            'phone' => 'string|required|unique:clients|max:10|min:10',
            'email' => 'string|required|unique:clients|max:250|email:rfc,dns'
        ];
    }

    public function messages()
    {
        return [
            //
            'name.string' => 'El valor no es correcto',
            'name.required' => 'Este campo es requerido',
            'name.max' => 'Solo se permite 250 caracteres',
            // 
            'dni.string' => 'El valor no es correcto',
            'dni.required' => 'Este campo es requerido',
            'dni.unique' => 'Ya se encuentra registrado',
            'dni.max' => 'Solo se permite 11 caracteres',
            'dni.min' => 'Se requier 11 caracteres',
            // 
            'ruc.string' => 'El valor no es correcto',
            'ruc.required' => 'Este campo es requerido',
            'ruc.unique' => 'Ya se encuentra registrado',
            'ruc.max' => 'Solo se permite 11 caracteres',
            'ruc.min' => 'Se requier 11 caracteres',
            // 
            'address.string' => 'El valor no es correcto',
            'address.required' => 'Este campo es requerido',
            'address.max' => 'Solo se permite 250 caracteres',
            // 
            'phone.string' => 'El valor no es correcto',
            'phone.required' => 'Este campo es requerido',
            'phone.unique' => 'Ya se encuentra registrado',
            'phone.max' => 'Solo se permite 10 caracteres',
            'phone.min' => 'Se requier 10 caracteres',
            // 
            'email.string' => 'El valor no es correcto',
            'email.required' => 'Este campo es requerido',
            'email.unique' => 'Ya se encuentra registrado',
            'email.max' => 'Solo se permite 200 caracteres',
            'email.email' => 'El valor no es un email valido',
        ];
    }
}
