<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
             'name' => 'string|required|unique:products,name,'.$this->route('product')->id.'|max:250',
             'image' => 'nullable|dimensions:min_width=100,min_height=200',
             'sell_price' => 'required',
             'category_id' => 'integer|required|exists:App\Category,id',
             'provider_id' => 'integer|required|exists:App\Provider,id',
        ];
    }

    public function messages()
    {
        return [
            //
            'name.string' => 'El valor no es correcto',
            'name.required' => 'Este campo es requerido',
            'name.unique' => 'Ya se encuentra registrado',
            'name.max' => 'Solo se permite 250 caracteres',
            // 
            'image.dimensions' => 'Imagen debe ser de 100x200 px',
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
        ];
    }
}
