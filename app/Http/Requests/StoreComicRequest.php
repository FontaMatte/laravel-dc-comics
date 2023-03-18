<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

// Helpers
use Illuminate\Validation\Rule;

class StoreComicRequest extends FormRequest
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
        return [
            'title' => 'required|max:64',
            'description' => 'required|max:1024',
            'thumb' => 'required',
            'price' => 'required | numeric | between:0,99.99 | decimal:0,2',
            'series' => 'required|max:32',
            'sale_date' => 'required|date',
            'type' => [
                'required',
                Rule::in(['comic', 'graphic']),
            ]
        ];
    }
}
