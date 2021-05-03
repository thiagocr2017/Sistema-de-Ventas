<?php

namespace App\Http\Requests\Product;

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
            //  'name' => 'string|required|unique:products|max:250',
            //  'description' => 'string|required|max:250',
             'image' => 'nullable|mimes:jpg,png,jpeg|max:2048',
            //  'sell_price' => 'required',
            //  'category_id' => 'integer|required|exists:App\Category,id',
            //  'provider_id' => 'integer|required|exists:App\Provider,id',
        ];
    }

    public function messages()
    {
        return [
            //
            // 'name.string' => 'El valor no es correcto',
            // 'name.required' => 'Este campo es requerido',
            // 'name.unique' => 'Ya se encuentra registrado',
            // 'name.max' => 'Solo se permite 250 caracteres',
            // //
            // 'description.string' => 'El valor no es correcto',
            // 'description.required' => 'Este campo es requerido',
            // 'description.max' => 'Solo se permite 250 caracteres',
            // // 
            'image.max' => 'Imagen debe ter maximo 2 MB',
            'image.mimes' => 'Imagen debe ser formato jpg,png,jpeg',
            // //
            // 'sell_price.required' => 'Este campo es requerido',
            // // 
            // 'category_id.integer' => 'El valor debe ser un entero',
            // 'category_id.required' => 'Este campo es requerido',
            // 'category_id.exists' => 'La categoría no existe',
            // // 
            // 'provider_id.integer' => 'El valor debe ser un entero',
            // 'provider_id.required' => 'Este campo es requerido',
            // 'provider_id.exists' => 'El proveedor no existe',
        ];
    }
}
