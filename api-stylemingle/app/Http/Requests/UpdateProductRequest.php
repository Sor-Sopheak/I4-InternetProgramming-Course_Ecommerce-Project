<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
        $method = $this->method();

        if ($method == 'PUT') {
            return [
                'product_name'        => ['required'],
                'product_type'        => ['required'],
                'image'       => ['required'],
                'price'     => ['required'],
                'category_id'        => ['required'],
                'description'       => ['required'],
                'postalCode'  => ['required']
            ];
        } else {
            return [
                'product_name'        => ['sometimes', 'required'],
                'product_type'        => ['sometimes', 'required'],
                'image'       => ['sometimes', 'required'],
                'price'     => ['sometimes', 'required'],
                'category_id'        => ['sometimes', 'required'],
                'description'       => ['sometimes', 'required'],
                'postalCode'  => ['sometimes', 'required']
            ];
        }
    }


    // // for matching
    // protected function prepareForValidation()
    // {
    //     if ($this->postalCode) {
    //         $this->merge([
    //             'postal_code' => $this->postalCode
    //         ]);
    //     }
    // }
}
