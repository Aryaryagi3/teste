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
            'name' => 'required|string|max:200|min:1',
            'description' => 'required|string|max:500|min:1',
            'cep' => 'required|string|max:8|min:1',
            'street' => 'required|string|max:200|min:1',
            'number' => 'required|string|max:10|min:1',
            'complement' => 'required|string|max:200|min:1',
            'neighborhood' => 'required|string|max:200|min:1',
            'state' => 'required|string|max:200|min:1',
            'city' => 'required|string|max:200|min:1',
            'status' => 'nullable',
        ];
    }
}