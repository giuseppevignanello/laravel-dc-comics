<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMovieRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return
            [
                'title' => 'required|unique:movies|min:5|max:200',
                'description' => 'nullable',
                'director' => 'nullable',
                'year' => 'required',
                'rating' => 'nullable',
                'poster' => 'nullable',
            ];
    }
}
