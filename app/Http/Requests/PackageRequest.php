<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PackageRequest extends FormRequest
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
            'name' => 'required|string|max:200',
            'description' => 'required|string|max:500',
            'cep' => 'required|string|max:8',
            'street' => 'required|string|max:200',
            'number' => 'required|string|max:10',
            'complement' => 'required|string|max:200',
            'neighborhood' => 'required|string|max:200',
            'state' => 'required|string|max:200',
            'city' => 'required|string|max:200',
            'status' => 'nullable',
        ];
    }
}