<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class UpdatePostRequest extends FormRequest
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
            // 'title' => ['required',Rule::unique('posts','title')->ignore($this->posts)],
            'title' => ['required', 'min:3','unique:App\Models\Post,title,'.$this->posts],
            'description' => ['required', 'min:10'],

        ];
    }


    public function messages()
    {
        return [
            'title.required' => 'Title must be at least 3 charachters',
            'description.min' => 'description must ba at least 10 charachters'
        ];
    }

}
