<?php

namespace App\Validators;

use Prettus\Validator\LaravelValidator;
use Prettus\Validator\Contracts\ValidatorInterface;

class ProjetoValidator extends LaravelValidator
{



    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'titulo'  => 'required',
            'subtitulo' => 'required',
            'descricao' => 'required',
            // 'imagem' => 'required',
        ],

        ValidatorInterface::RULE_UPDATE => [
            'titulo'  => 'required',
            'subtitulo' => 'required',
            'descricao' => 'required',
            // 'imagem' => 'required',
        ]
    ];
}
