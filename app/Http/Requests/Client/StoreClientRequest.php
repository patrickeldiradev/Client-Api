<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class StoreClientRequest extends FormRequest
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
            'name'  => [
                'required',
                'string',
                'min:2',
                'max:100',
            ],
            'mobile' => [
                'required',
                'numeric',
            ],
            'email'  => [
                'required',
                'email',
                'min:1',
                'max:100',
            ],
            'latitude'  => [
                'required',
                'string',
                'min:2',
                'max:100',
            ],
            'longitude'  => [
                'required',
                'string',
                'min:2',
                'max:100',
            ],
        ];
    }
}
