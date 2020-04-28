<?php

namespace App\Repositories;

use App\Models\Assign;
use App\Repositories\BaseRepository;

/**
 * Class AssignRepository
 * @package App\Repositories
 * @version April 28, 2020, 9:21 am UTC
*/

class AssignRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'course_id',
        'level_id',
        'shift_id',
        'classroom_id',
        'batch_id',
        'time_id',
        'semester_id'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Assign::class;
    }
}
