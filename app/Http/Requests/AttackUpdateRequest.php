<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AttackUpdateRequest extends FormRequest
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
    public function rules()
    {
        return [
            'name' => 'required|string|max:50|unique:attacks,name,'.$this->route('attack')->id,
            'description' => 'required|string',
            'type_id' => 'required|exists:types,id',
            'puissance' => 'required|integer|min:1',
            'precision' => 'required|integer|min:1',
            'PP' => 'required|integer|min:1',
        ];
    }
}
