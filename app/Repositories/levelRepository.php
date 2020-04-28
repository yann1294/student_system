<?php

namespace App\Repositories;

use App\Models\level;
use App\Repositories\BaseRepository;

/**
 * Class levelRepository
 * @package App\Repositories
 * @version April 28, 2020, 9:15 am UTC
*/

class levelRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'level',
        'course_id',
        'level_description'
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
        return level::class;
    }
}
