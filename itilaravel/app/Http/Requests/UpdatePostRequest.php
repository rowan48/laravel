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
        // $id = $this->route ('post')->first();
        return [
            'title' => ['required',Rule::unique('posts','title')->ignore($this->id)],

            // 'title' => 'required|same:title|unique:posts,title|max:255,min:3',$id-500,
            // 'title' => ['required', 'min:3','unique:App\Models\Post,title'],
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
