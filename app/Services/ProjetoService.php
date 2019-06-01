<?php

namespace App\Services;

use App\Repositories\ProjetoRepository;
use Exception;
use App\Validators\ProjetoValidator;
use Prettus\Validator\Contracts\ValidatorInterface;
use Illuminate\Database\QueryException;
use Prettus\Validator\Exceptions\ValidatorException;

class ProjetoService
{

    private $repository;
    private $validator;


    public function __construct(ProjetoRepository $repository, ProjetoValidator $validator)
    {
        $this->repository = $repository;
        $this->validator = $validator;
    }

    public function store(array $data)
    {


        try {

            $this->validator->with($data)->passesOrFail(ValidatorInterface::RULE_CREATE);
            $projeto = $this->repository->create($data);

            return [
                'success' => true,
                'messages' => "Projeto cadastrado",
                'data' => $projeto,
            ];
        } catch (Exception $e) {
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

    public function update(array $data, $projeto_id)
    {

        try {
            $this->validator->with($data)->passesOrFail(ValidatorInterface::RULE_UPDATE);
            $projeto = $this->repository->update($data, $projeto_id);

            return [
                'success' => true,
                'messages' => "Projeto atualizado",
                'data' => $projeto,

            ];
        } catch (Exception $e) {

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
    public function projetoStore($projeto_id, $data)
    { }
    public function destroy($projeto_id)
    {

        try {
            $this->repository->delete($projeto_id);
        } catch (Exception $e) {

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
}
