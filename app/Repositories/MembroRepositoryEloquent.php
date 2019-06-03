<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\MembroRepository;
use App\Entities\Membro;
use App\Validators\MembroValidator;

/**
 * Class MembroRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class MembroRepositoryEloquent extends BaseRepository implements MembroRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Membro::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return MembroValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
