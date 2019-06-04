<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\SlideRepository;
use App\Entities\Slide;
use App\Validators\SlideValidator;

/**
 * Class SlideRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class SlideRepositoryEloquent extends BaseRepository implements SlideRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Slide::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return SlideValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
