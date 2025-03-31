<?php

namespace App\Http\Requests\API\v1\Auth;

use Illuminate\Contracts\Validation\ValidationRule;

use App\Http\Requests\API\v1\BaseRequest;

class LoginRequest extends BaseRequest
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
            'email' => 'required|string|max:100|email',
            'password' => 'required|string|min:6|max:20'
        ];
    }

    /**
     * @return array
     */
    public function getQueryParams(): array
    {
        return $this->only('email', 'password');
    }
}
