<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

/**
 * Class SlideValidator.
 *
 * @package namespace App\Validators;
 */
class SlideValidator extends LaravelValidator
{
    /**
     * Validation Rules
     *
     * @var array
     */
    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'imagem'  => 'required',
            'titulo'  => 'required',
            'texto'  => 'required',
        ],
        ValidatorInterface::RULE_UPDATE => [
            'imagem'  => 'required',
            'titulo'  => 'required',
            'texto'  => 'required',
        ],
    ];
}
