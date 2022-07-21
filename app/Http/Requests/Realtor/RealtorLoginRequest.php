<?php

namespace App\Http\Requests\Realtor;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;

class RealtorLoginRequest extends FormRequest
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
            'email' => 'required|exists:realtors,email',
            'password' => 'required|min:6',
        ];
    }

    public function messages(){
        return [
            'email.required' => 'Email is required!',
            'email.exists' => 'This email does not exist!',
        ];
    }

    protected function failedValidation(Validator $validator){
        // return errors in json object/array
        if($this->wantsJson()){
            $response = response()->json([
                "success" => false,
                'errors' => $validator->getMessageBag()->toArray(),
            ]);
        }

        throw (new ValidationException($validator, $response))
            ->errorBag($this->errorBag)
            ->redirectTo($this->getRedirectUrl());
    }
}
