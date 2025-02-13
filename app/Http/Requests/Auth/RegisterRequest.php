<?php

namespace App\Http\Requests\Auth;

use Illuminate\Contracts\Validation\ValidationRule;

use App\Services\Requests\ApiRequest;

class RegisterRequest extends ApiRequest
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
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name'     => 'nullable|string|max:20|unique:users,name',
            'email'    => 'required|string|max:100|unique:users,email|email',
            'password' => 'required|string|min:6|max:20'
        ];
    }

    /**
     * @return array
     */
    public function getQueryParams(): array
    {
        return $this->only('name', 'email', 'password');
    }
}
