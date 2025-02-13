<?php

namespace App\Services\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Exceptions\HttpResponseException;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class ApiRequest
 * @package App\Services\Requests
 */
abstract class ApiRequest extends FormRequest
{
    /**
     * Handle a failed validation attempt.
     *
     * @param Validator $validator
     * @throws HttpResponseException
     */
    protected function failedValidation(Validator $validator)
    {
        $errors = (new ValidationException($validator))->errors();

        throw new HttpResponseException(
            response()->json(compact('errors'), Response::HTTP_UNPROCESSABLE_ENTITY)
        );
    }

    /**
     * @return array
     */
    public abstract function getQueryParams(): array;
}
