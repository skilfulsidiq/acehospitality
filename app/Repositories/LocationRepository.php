<?php

namespace App\Repositories;

use App\Model\Location;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\DB;

/**
 * Class UserRepository
 * @package App\Repositories
 * @version November 11, 2019, 12:47 pm IST
 */

class LocationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        // 'name',
        // 'email',
        // 'username',
        // 'address',
        // 'description',
        // 'password',
        // 'status'
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
        return Location::class;

    }

   

}
