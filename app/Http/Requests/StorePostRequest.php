<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if($this->idUserFK == auth()->user()->id){
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
        // Regla de Validacion
        $rules = [
            'name' => 'required',
            'slug' => 'required|unique:posts',
            'status' => 'required|in:1,2'
        ];

        if($this->status == 2){
            $rules = array_merge($rules, [
                'idCategoryFK' => 'required',
                'tags' => 'required',
                'extract' => 'required',
                'contenido' => 'required',
            ]);
        }

        return $rules;
    }
}
