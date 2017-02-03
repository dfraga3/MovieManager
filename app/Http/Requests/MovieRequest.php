<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class MovieRequest extends FormRequest
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
            'title' => 'required|min:1|max:50',
            'format' => 'required|numeric|min:1|max:3',
            'rating' => 'required|digits_between:1,5',
            'year' => 'required|numeric|min:1801|max:2099',
            'length' => 'required|digits_between:1,499',
        ];
    }
}
