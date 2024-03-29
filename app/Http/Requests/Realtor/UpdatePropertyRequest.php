<?php

namespace App\Http\Requests\Realtor;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;

class UpdatePropertyRequest extends FormRequest
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
            'property_type_id' => 'required',
            'state_id' => 'required',
            'title' => 'required|string|unique:properties,title,'.\Request::instance()->id,
            'address' => 'required',
            'description' => 'required',
            'bedrooms' => 'required|numeric',
            'bathrooms' => 'required|numeric',
            'living_rooms' => 'required|numeric',
            'cost' => 'required|numeric',
            'features' => 'nullable',
            'images.*' => 'required|image|mimes:jpg,jpeg,png,gif|max:5048',
        ];
    }

    public function messages(){
        return [
            'title.required' => 'Title is required!',
            'title.unique' => 'Property already exists!',
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
