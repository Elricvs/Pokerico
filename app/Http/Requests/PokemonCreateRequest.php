<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PokemonCreateRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:50',
            'imgurl' => 'nullable|string|max:255',
            'description' => 'required|string',
            'hp' => 'required|integer|min:1',
            'att' => 'required|integer|min:1',
            'def' => 'required|integer|min:1',
            'attspe' => 'required|integer|min:1',
            'defspe' => 'required|integer|min:1',
            'vit' => 'required|integer|min:1',
            'size' => 'required|numeric|min:0.1',
            'weight' => 'required|numeric|min:0.1',
            'type1_id' => 'required|exists:types,id',
            'type2_id' => 'nullable|exists:types,id',
            'attack1_id' => 'required|exists:attacks,id',
            // 'attack2_id' => 'nullable|exists:attack,id',
            // 'attack3_id' => 'nullable|exists:attack,id',
            // 'attack4_id' => 'nullable|exists:attack,id',
        ];
    }
}
