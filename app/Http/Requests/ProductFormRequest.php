<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductFormRequest extends FormRequest
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
            'type'=>'required|min:3|max:25',
            'trademarker'=>'required|min:3|max:15',
            'so'=>'required',
            'model'=>'required',
            'serialnumber'=>'required',
            'quality'=>'required',
            'status'=>'required',
            'ram'=>'required|numeric|min:1|max:10',
            'data' => 'required|string|max:2',
        ];
    }
    public function messages(){
        return[
            //
        ];
    }
}
