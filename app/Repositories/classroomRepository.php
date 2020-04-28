<?php

namespace App\Repositories;

use App\Models\classroom;
use App\Repositories\BaseRepository;

/**
 * Class classroomRepository
 * @package App\Repositories
 * @version April 28, 2020, 9:14 am UTC
*/

class classroomRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'classroom_name',
        'classroom_code',
        'classroom_description',
        'classroom_status'
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
        return classroom::class;
    }
}
