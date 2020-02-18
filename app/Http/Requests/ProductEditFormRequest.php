<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductEditFormRequest extends FormRequest
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
            'serialnumber'=>'required',
            'type'=>'required|min:1|max:25',
            'trademark'=>'required|min:1|max:25',
            'model'=>'required',
            'status'=>'required',
            'price'=>'required|numeric',
        ];
    }
}
