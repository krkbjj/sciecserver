<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\InstutionsRepository;
use App\Entities\Instutions;
use App\Validators\InstutionsValidator;

/**
 * Class InstutionsRepositoryEloquent
 * @package namespace App\Repositories;
 */
class InstutionsRepositoryEloquent extends BaseRepository implements InstutionsRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Instutions::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
