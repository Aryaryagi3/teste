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
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'user_id' => 'required|integer|numeric|exists:users,id',
            'name' => 'required|string|max:200',
            'description' => 'required|string|max:500',
            'status' => 'required|string|max:50',
            'cep' => 'required|integer|numeric',
            'street' => 'required|string|max:200',
            'number' => 'required|integer|numeric',
            'complement' => 'required|string|max:200',
            'neighbourhood' => 'required|string|max:200',
            'state' => 'required|string|max:200',
            'city' => 'required|string|max:200',
        ];
    }
}