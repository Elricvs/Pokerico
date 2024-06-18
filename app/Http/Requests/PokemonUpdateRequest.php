<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PokemonUpdateRequest extends FormRequest
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
            'name' => 'required|string|max:50|unique:pokemon,name,'.$this->route('pokemon')->id,
            'img' => 'nullable|image|max:2048',
            'description' => 'required|string',
            'hp' => 'required|integer|min:1',
            'att' => 'required|integer|min:1',
            'def' => 'required|integer|min:1',
            'attspe' => 'required|integer|min:1',
            'defspe' => 'required|integer|min:1',
            'vit' => 'required|integer|min:1',
            'size' => 'required|decimal:0,2|min:0,1',
            'weight' => 'required|decimal:0,2|min:0,1',
            'type1_id' => 'required|exists:types,id',
            'type2_id' => 'nullable|exists:types,id',
            'attack1_id' => 'required|exists:attacks,id',
            'attack2_id' => 'nullable|exists:attacks,id',
            'attack3_id' => 'nullable|exists:attacks,id',
            'attack4_id' => 'nullable|exists:attacks,id',
        ];
    }
}
