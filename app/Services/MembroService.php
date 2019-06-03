<?php


namespace App\Services;

use App\Repositories\MembroRepository;
use Exception;
use App\Validators\MembroValidator;
use App\Exceptions\Exceptions;
use Prettus\Validator\Contracts\ValidatorInterface;

class MembroService
{

    protected $repository;
    protected $validator;
    protected $exceptions;

    public function __construct(MembroRepository $repository, MembroValidator $validator, Exceptions $exceptions)
    {

        $this->repository = $repository;
        $this->validator = $validator;
        $this->exceptions = $exceptions;
    }


    public function store(array $data)
    {

        
        try {
            $this->validator->with($data)->passesOrFail(ValidatorInterface::RULE_CREATE);
            $membro = $this->repository->create($data);

            return [
                'success' => true,
                'messages' => "Membro cadastrado",
                'data' => $membro,
            ];
        } catch (Exception $e) {
            return $this->exceptions->insertException($e);
        }
    }

    public function update(array $data, $membro_id)
    {
        try {
            $this->validator->with($data)->passesOrFail(ValidatorInterface::RULE_UPDATE);
            $membro = $this->repository->update($data, $membro_id);

            return [
                'success' => true,
                'messages' => "Membro atualizado",
                'data' => $membro,

            ];
        } catch (Exception $e) {
            $this->exceptions->insertException($e);
        }
    }

    public function destroy($membro_id)
    {
       
        try {
            $this->repository->delete($membro_id);
        } catch (Exception $e) {

            $this->exceptions->insertException($e);
        }
    }
}
