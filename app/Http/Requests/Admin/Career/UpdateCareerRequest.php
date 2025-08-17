<?php

namespace App\Http\Requests\Admin\Career;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCareerRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'category' => ['required', 'string', 'max:255'],
            'position' => ['required', 'string', 'max:255'],
            'short_description' => ['string', 'max:500', 'nullable'],
            'description' => ['text', 'nullable'],
            'location' => ['string', 'max:255', 'nullable'],
            'experience' => ['integer', 'min:0', 'nullable'],
            'package' => ['string', 'max:255', 'nullable'],
            'skills' => ['string', 'max:255', 'nullable'],
            'status' => ['required', 'string', 'max:255'],
        ];
    }
}
