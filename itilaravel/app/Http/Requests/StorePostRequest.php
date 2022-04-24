<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class StorePostRequest extends FormRequest
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
            'title' => ['required',Rule::unique('posts','title')->ignore($this->id)],
            'description' => ['required', 'min:10'],
            'image' => 'image|mimes:jpg,png|max:2048',

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
