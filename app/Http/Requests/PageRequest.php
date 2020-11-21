<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PageRequest extends FormRequest
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
            'type' => 'string|in:welcome,contact',
            'title' => 'string|nullable',
            'description' => 'string|nullable',
            'content' => 'string|nullable',
            'search_index' => 'boolean|nullable',
            'featured' => 'image|nullable',
        ];
    }
}
