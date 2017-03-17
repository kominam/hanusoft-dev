<?php

namespace App\Repositories\Eloquent;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Contracts\Repositories\ResourceRepository;
use App\Models\Resource;
use App\Validators\ResourceValidator;

/**
 * Class ResourceRepositoryEloquent
 * @package namespace App\Repositories\Eloquent;
 */
class ResourceRepositoryEloquent extends BaseRepository implements ResourceRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Resource::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return ResourceValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
