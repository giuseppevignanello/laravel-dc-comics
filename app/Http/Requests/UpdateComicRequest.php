<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
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
                'title' => 'required|unique:comics|min:5|max:200',
                'description' => 'nullable',
                'thumb' => 'nullable',
                'price' => 'required',
                'series' => 'nullable|max:50',
                'sale_date' => 'nullable',
                'type' => 'nullable|max:255',
            ];
    }
}
