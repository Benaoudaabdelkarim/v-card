<?php

namespace App\Http\Requests;

use App\Models\WhatsappStoreProduct;
use Illuminate\Foundation\Http\FormRequest;

class UpdateWhatsappProductRequest extends FormRequest
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
        $rules= WhatsappStoreProduct::$rules;
        $rules['images'] = 'array|min:1';
        
        return $rules;
    }
}
