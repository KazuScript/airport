<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FlightSearchRequest extends FormRequest
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
            'origin' => ['nullable', 'string', 'exists:airports,code'],
            'destination' => ['nullable', 'string', 'exists:airports,code'],
            'date' => ['nullable', 'date'],
        ];
    }

    public function withValidator($validator) //validacion cruzada
    {
        $validator->after(function ($validator) {
            $origin = $this->input('origin');
            $destination = $this->input('destination');

            if ($origin && $destination && $origin === $destination) {
                $validator->errors()->add(
                    'destination',
                    'El aeropuerto de destino debe ser distinto al de origen.'
                );
            }
        });
    }
}
