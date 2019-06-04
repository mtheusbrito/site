<?php

namespace App\Services;

use App\Repositories\SlideRepository;
use App\Validators\SlideValidator;
use App\Exceptions\Exceptions;
use Exception;
use Prettus\Validator\Contracts\ValidatorInterface;

class SlideService
{
    protected $repository;
    protected $validator;
    protected $exceptions;

    public function __construct(SlideRepository $repository, SlideValidator $validator, Exceptions $exceptions)
    {
        $this->repository = $repository;
        $this->validator = $validator;
        $this->exceptions = $exceptions;
    }

    public function store(array $data)
    {

        try {
            $this->validator->with($data)->passesOrFail(ValidatorInterface::RULE_CREATE);
            $slide = $this->repository->create($data);

            return [
                'success' => true,
                'messages' => "Slide cadastrado",
                'data' => $slide,
            ];
        } catch (Exception $e) {
            return  $this->exceptions->insertException($e);
        }
    }
    public function update(array $data, $slide_id)
    {

        try {

            $this->validator->with($data)->passesOrFail(ValidatorInterface::RULE_UPDATE);
            $slide = $this->repository->update($data, $slide_id);

            return [
                'success' => true,
                'messages' => "Slide atualizado",
                'data' => $slide,

            ];
        } catch (Exception $e) {
            $this->exceptions->insertException($e);
        }
    }
    public function destroy($slide_id)
    {
        try {
            $this->repository->delete($slide_id);
        } catch (Exception $e) {
            $this->exceptions->insertException($e);
        }
    }
}
