<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PromotionCreationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return !auth()->guest();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => "required",
            'valid_until' => "required|date",
            'image' => "image",
            'cashback' => [
                "required_without_all:discount_percentage,discount_value",
                "prohibited_unless:discount_percentage,null",
                "prohibited_unless:discount_value,null",
                "numeric",
                "min:1",
                "max:100",
                "nullable",
            ],
            'discount_percentage' => [
                "required_without_all:discount_value,cashback",
                "prohibited_unless:cashback,null",
                "prohibited_unless:discount_value,null",
                "numeric",
                "min:1",
                "max:100",
                "nullable",
            ],
            'discount_value' => [
                "required_without_all:discount_percentage,cashback",
                "prohibited_unless:cashback,null",
                "prohibited_unless:discount_percentage,null",
                "numeric",
                "min:1",
                "nullable",
            ],
            'details' => "required",
        ];
    }
}
