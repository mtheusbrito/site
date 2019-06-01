<?php
namespace App\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjetoUpdateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {

        return [];
    }
}
