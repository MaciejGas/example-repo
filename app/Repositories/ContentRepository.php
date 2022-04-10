<?php

namespace App\Repositories;

use App\Models\Content;

use DB;

class ContentRepository extends BaseRepository{

    public function __construct(Content $model){

        $this->model= $model;
    }

}