<?php

namespace App\Repositories;

use App\Models\Batch;
use App\Repositories\BaseRepository;

/**
 * Class BatchRepository
 * @package App\Repositories
 * @version April 28, 2020, 9:17 am UTC
*/

class BatchRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'batch'
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
        return Batch::class;
    }
}
