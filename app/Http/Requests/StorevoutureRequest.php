<?php

namespace App\Http\Requests;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class StorevoutureRequest extends FormRequest
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
            //
            // 'id' => ['required', 'unique:voutures,id'],
            'vou_date'=> ['unique:voutures,vou_date']

        ];
    }

    protected function prepareForValidation()
    {
        // dd($this->vou_date);
        $this->merge([
            'vou_date' => Carbon::createFromFormat('m/d/Y', $this->vou_date)->toDateString('Y-m-d'),
        ]);
    }
}
