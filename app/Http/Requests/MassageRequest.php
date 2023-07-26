<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MassageRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            //
            'name' => 'required |string|regex:/^[a-zA-Z]+$/u',
            'email' => 'required|email',
            'message' => 'required|regex:/^[a-zA-Z]+$/u'
        ];
    }
}
