<?php namespace App\Exceptions;

use \Exception;
use Illuminate\Database\QueryException;
use Prettus\Validator\Exceptions\ValidatorException;
class Exceptions
{


    public function insertException(Exception $e)
    {


        switch (get_class($e)) {
            case QueryException::class:
                return ['success' => false, 'messages' => $e->getMessage()];
            case ValidatorException::class:
                return ['success' => false, 'messages' => $e->getMessageBag()];
            case Exception::class:
                return ['success' => false, 'messages' => $e->getMessage()];
            default:
                return ['success' => false, 'messages' => get_class($e)];
        }
    }
}
