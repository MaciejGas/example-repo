<?php

namespace App\Repositories;

use App\Models\Accessory;

use DB;

class AccessoryRepository extends BaseRepository{

    public function __construct(Accessory $model){

        $this->model= $model;
    }

}