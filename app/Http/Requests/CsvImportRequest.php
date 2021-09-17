<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CsvImportRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'csv_file' => ['required', 'file']
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}