<?php

namespace App\Repositories;

use App\Models\classes;
use App\Repositories\BaseRepository;

/**
 * Class classesRepository
 * @package App\Repositories
 * @version April 28, 2020, 9:06 am UTC
*/

class classesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'class_name',
        'class_code'
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
        return classes::class;
    }
}
