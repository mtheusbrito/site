<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

/**
 * Class MembroValidator.
 *
 * @package namespace App\Validators;
 */
class MembroValidator extends LaravelValidator
{
    /**
     * Validation Rules
     *
     * @var array
     */
    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'nome' => 'required',
            'email' => 'required',
            'cargo' => 'required',
            'descricao' => 'required',

        ],
        ValidatorInterface::RULE_UPDATE => [
            'nome' => 'required',
            'email' => 'required',
            'cargo' => 'required',
            'descricao' => 'required',
        ],
    ];
}
