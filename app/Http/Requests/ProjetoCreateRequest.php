<?php
namespace App\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjetoCreateRequest extends FormRequest
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
