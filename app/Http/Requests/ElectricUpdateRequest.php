<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ElectricUpdateRequest extends FormRequest
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
            'currentMonth' => 'required', // Chưa làm được so sánh lớn hơn previous Month
        ];
    }

    public function messages()
    {
        return [
            'currentMonth.required' => 'The field is required . So sánh lớn hơn previous Month: coming soon'
        ];
    }
}
