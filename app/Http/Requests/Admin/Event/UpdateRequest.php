<?php

namespace App\Http\Requests\Admin\Event;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'title' => 'nullable|string',
            'description' => 'nullable|string',
            'category_id' => 'nullable|integer|exists:categories,id',
            'phone' => 'nullable|numeric',
            'latitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
            'city_id' => 'nullable|integer|exists:cities,id',
            'location' => 'nullable|string',
            'people_count' => 'nullable|integer',
            'image'=> 'nullable|file',
        ];
    }

}
