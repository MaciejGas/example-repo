<?php

namespace App\Repositories;

use App\Models\Event;

use DB;

class EventRepository extends BaseRepository{

    public function __construct(Event $model){

        $this->model= $model;
    }

}