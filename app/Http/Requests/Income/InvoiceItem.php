<?php

namespace App\Http\Requests\Income;

use App\Abstracts\Http\FormRequest;

class InvoiceItem extends FormRequest
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
            'invoice_id' => 'required|integer',
            'name' => 'required|string',
            'quantity' => 'required|integer',
            'price' => 'required',
            'total' => 'required',
            'tax' => 'required',
            'tax_id' => 'required',
        ];
    }
}
