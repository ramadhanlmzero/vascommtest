<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Exceptions\HttpResponseException;
use App\Exceptions\AlertException;

class BaseRequest extends FormRequest
{
    protected function failedValidation(Validator $validator)
    {
        $errors = (new ValidationException($validator))->errors();
        if ($this->expectsJson()) {
            throw new HttpResponseException(
                response()->json(['data' => $errors], 422)
            );
        }

        foreach ($errors as $key => $error) {
            throw new AlertException($error[0]);
        }
    }
}
