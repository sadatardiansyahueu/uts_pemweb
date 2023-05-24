<?php

namespace App\Http\Requests;

use App\Models\Pembayaran;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdatePembayaranRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('pembayaran_edit');
    }

    public function rules()
    {
        return [
            'idpembayaran' => [
                'string',
                'required',
            ],
            'namapembayaran' => [
                'string',
                'required',
            ],
            'bank' => [
                'string',
                'required',
            ],
            'jumlahpembayaran' => [
                'string',
                'required',
            ],
            'status' => [
                'string',
                'required',
            ],
        ];
    }
}
