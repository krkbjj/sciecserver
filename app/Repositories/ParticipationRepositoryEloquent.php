<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\ParticipationRepository;
use App\Entities\Participation;
use App\Validators\ParticipationValidator;

/**
 * Class ParticipationRepositoryEloquent
 * @package namespace App\Repositories;
 */
class ParticipationRepositoryEloquent extends BaseRepository implements ParticipationRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Participation::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
