<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ImageRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if(auth()->user()->id){
            return true;
            }else{
                return false;
            }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'name' => 'required|min:5',            
            'slug' => 'required|unique:images',
            'descripcion' => 'required|min:50',
            'file' => 'required|image'
        ];

    return $rules;
    }
}
