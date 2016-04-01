<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Response;

class SavingFormRequest extends FormRequest
{
    public function rules()
    {
        return [
            'amount' => 'required|numeric'
        ];
    }

    public function authorize()
    {
        // Only allow logged in users
        // return \Auth::check();
        // Allows all users in
        return true;
    }
}
