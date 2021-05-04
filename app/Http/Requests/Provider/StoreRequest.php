<?php

namespace App\Http\Requests\Provider;

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
        return true ;
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
            'description' => 'required|string|max:250',
            'phone' => 'required|string|regex:/[0-9]{11}/|max:11|min:12|unique:providers',
            'email' => 'nullable|email:rfc,dns|max:200|unique:providers',
            'ruc_number' => 'required|alpha_num|max:11|min:11|unique:providers',
            'address' => 'nullable|string|max:255',
            'state' => 'nullable|string|max:50',
            'country' => 'nullable|string|max:50',
        ];
    }

    public function messages()
    {
        return [
            //
            'name.required' => 'Este campo es requerido',
            'name.string' => 'El valor no es correcto',
            'name.max' => 'Solo se permite 250 caracteres',
            //
            'description.required' => 'Este campo es requerido',
            'description.string' => 'El valor no es correcto',
            'description.max' => 'Solo se permite 250 caracteres',
            // 
            'email.email' => 'El valor no es un email valido',
            'email.max' => 'Solo se permite 200 caracteres',
            'email.unique' => 'Ya se encuentra registrado',
            // 
            'ruc_number.required' => 'Este campo es requerido',
            'ruc_number.alpha_num' => 'El valor no es correcto',
            'ruc_number.max' => 'Solo se permite 11 caracteres',
            'ruc_number.min' => 'Se requier 11 caracteres',
            'ruc_number.unique' => 'Ya se encuentra registrado',
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
            'phone.required' => 'Este campo es requerido',
            'phone.string' => 'El valor no es correcto',
            'phone.regex' => 'El teléfono debe tener el formato +12345678901',
            'phone.max' => 'Solo se permite 12 caracteres',
            'phone.min' => 'Se requier 12 caracteres',
            'phone.unique' => 'Ya se encuentra registrado',
        ];
    }
}
