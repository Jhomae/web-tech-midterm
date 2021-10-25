<?php

namespace App\Repositories;

use App\Models\RiceInfoInPhil;
use App\Repositories\BaseRepository;

/**
 * Class RiceInfoInPhilRepository
 * @package App\Repositories
 * @version October 25, 2021, 9:07 am UTC
*/

class RiceInfoInPhilRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name_of_the_rice',
        'variety',
        'price',
        'most_planted_region'
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
        return RiceInfoInPhil::class;
    }
}
