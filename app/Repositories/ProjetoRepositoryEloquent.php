<?php
namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\ProjetoRepository;
use App\Projeto;
use App\Validators\ProjetoValidator;

/**
 * Class InstituitionRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class ProjetoRepositoryEloquent extends BaseRepository implements ProjetoRepository
{

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Projeto::class;
    }
    /**
     * Specify Validator class name
     *
     * @return mixed
     */
    public function validator()
    {
        return ProjetoValidator::class;
    }
    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
