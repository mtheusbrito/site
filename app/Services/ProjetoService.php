<?php

namespace App\Services;

use App\Repositories\ProjetoRepository;
use Exception;
use App\Validators\ProjetoValidator;
use Prettus\Validator\Contracts\ValidatorInterface;
use App\Exceptions\Exceptions;

class ProjetoService
{

    private $repository;
    private $validator;
    private $exceptions;


    public function __construct(ProjetoRepository $repository, ProjetoValidator $validator, Exceptions $exceptions)
    {
        $this->repository = $repository;
        $this->validator = $validator;
        $this->exceptions = $exceptions;
    }

    public function store(array $data, $path)
    {


        try {

            if ($path)
                $data["imagem"] = 'storage/' . $path;


            $this->validator->with($data)->passesOrFail(ValidatorInterface::RULE_CREATE);
            $projeto = $this->repository->create($data);

            return [
                'success' => true,
                'messages' => "Projeto cadastrado",
                'data' => $projeto,
            ];
        } catch (Exception $e) {
         return  $this->exceptions->insertException($e);
        }
    }

    public function update(array $data, $projeto_id, $path)
    {

        try {

            if ($path)
                $data["imagem"] = 'storage/' . $path;

            $this->validator->with($data)->passesOrFail(ValidatorInterface::RULE_UPDATE);
            $projeto = $this->repository->update($data, $projeto_id);

            return [
                'success' => true,
                'messages' => "Projeto atualizado",
                'data' => $projeto,

            ];
        } catch (Exception $e) {
            $this->exceptions->insertException($e);
        }
    }

    public function destroy($projeto_id)
    {

        try {
            $this->repository->delete($projeto_id);
        } catch (Exception $e) {

            $this->exceptions->insertException($e);
        }
    }
}
