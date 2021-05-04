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
            'name' => 'required|string|max:250',
            'dni' => 'required|alpha_num|unique:clients|max:11|min:9',
            'ruc' => 'nullable|alpha_num|unique:clients|max:11|min:9',
            'address' => 'nullable|string|max:255',
            'state' => 'nullable|string|max:50',
            'country' => 'nullable|string|max:50',
            'phone' => 'required|string|regex:/[0-9]{11}/|unique:clients|max:14|min:11',
            'email' => 'required|string|unique:clients|max:250|email:rfc,dns'
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
            'dni.alpha_num' => 'El valor no es correcto',
            'dni.required' => 'Este campo es requerido',
            'dni.unique' => 'Ya se encuentra registrado',
            'dni.max' => 'Solo se permite 11 caracteres',
            'dni.min' => 'Se requier 9 caracteres',
            // 
            'ruc.alpha_num' => 'El valor no es correcto',
            'ruc.unique' => 'Ya se encuentra registrado',
            'ruc.max' => 'Solo se permite 11 caracteres',
            'ruc.min' => 'Se requier 9 caracteres',
            // 
            'address.string' => 'El valor no es correcto',
            'address.max' => 'Solo se permite 250 caracteres',
            // 
            'state.string' => 'El valor no es correcto',
            'state.max' => 'Solo se permite 50 caracteres',
            // 
            'country.string' => 'El valor no es correcto',
            'country.max' => 'Solo se permite 50 caracteres',
            // 
            'phone.string' => 'El valor no es correcto',
            'phone.required' => 'Este campo es requerido',
            'phone.regex' => 'El teléfono debe tener el formato +12345678901',
            'phone.unique' => 'Ya se encuentra registrado',
            'phone.max' => 'Solo se permite 14 caracteres',
            'phone.min' => 'Se requier 11 caracteres',
            // 
            'email.string' => 'El valor no es correcto',
            'email.required' => 'Este campo es requerido',
            'email.unique' => 'Ya se encuentra registrado',
            'email.max' => 'Solo se permite 200 caracteres',
            'email.email' => 'El valor no es un email valido',
        ];
    }
}
