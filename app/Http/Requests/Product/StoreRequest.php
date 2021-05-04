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
             'code' => 'required|alpha_num|unique:products|max:250',
             'name' => 'required|string|unique:products|max:250',
             'description' => 'required|string|max:250',
             'stock' => 'required|numeric|max:250',
             'sell_price' => 'required',
             'category_id' => 'required|integer|exists:App\Models\Category,id',
             'provider_id' => 'required|integer|exists:App\Models\Provider,id',
             'image' => 'nullable|mimes:jpg,png,jpeg|max:2000',
        ];
    }

    public function messages()
    {
        return [
            //
            'code.alpha_num' => 'El valor no es correcto',
            'code.required' => 'Este campo es requerido',
            'code.unique' => 'Ya se encuentra registrado',
            'code.max' => 'Solo se permite 250 caracteres',
            //
            'name.string' => 'El valor no es correcto',
            'name.required' => 'Este campo es requerido',
            'name.unique' => 'Ya se encuentra registrado',
            'name.max' => 'Solo se permite 250 caracteres',
            //
            'description.string' => 'El valor no es correcto',
            'description.required' => 'Este campo es requerido',
            'description.max' => 'Solo se permite 250 caracteres',
            // 
            'stock.numeric' => 'El valor no es correcto',
            'stock.required' => 'Este campo es requerido',
            'stock.max' => 'Solo se permite 250 caracteres',
            //
            'sell_price.required' => 'Este campo es requerido',
            // 
            'category_id.integer' => 'El valor debe ser un entero',
            'category_id.required' => 'Este campo es requerido',
            'category_id.exists' => 'La categoría no existe',
            // 
            'provider_id.integer' => 'El valor debe ser un entero',
            'provider_id.required' => 'Este campo es requerido',
            'provider_id.exists' => 'El proveedor no existe',
            // 
            'image.max' => 'Imagen debe ter maximo 2 MB',
            'image.mimes' => 'Imagen debe ser formato jpg,png,jpeg',
        ];
    }
}
