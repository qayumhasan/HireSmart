<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobManagementRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title'            => 'required|string|max:255',
            'description'      => 'required|string',
            'locations'         => 'nullable|array',
            'locations.*'       => 'integer',
            'skills'  => 'nullable|array',
            'skills.*'=> 'integer',
            'min_salary'       => 'nullable|numeric',
            'max_salary'       => 'nullable|numeric',
            'is_active'        => 'boolean',
            'posted_at'        => 'nullable|date',
            'expires_at'       => 'nullable|date|after_or_equal:posted_at',
        ];
    }
}
