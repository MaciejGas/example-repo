<?php

namespace App\Repositories;

use App\Models\User;

use DB;

class UserRepository extends BaseRepository{

    public function __construct(User $model){

        $this->model= $model;
    }

    public function get_all_active_clients()
    {
        return $this->model->where('is_admin', 0)
                           ->where('status', 'active')
                           ->orderBy('name', 'asc')->get();
    }

    public function all_clients()
    {
        return $this->model->where('is_admin', 0)
        ->orderBy('name', 'asc')->get();
    }

    public function client_last_month()
    {
        $week_ago = date('Y-m-d H:i:s', strtotime('-1 month'));

        return $this->model->where('is_admin', 0)
                           ->where('created_at', '>' , $week_ago)
                           ->orderBy('name', 'asc')->get();
    }

    public function client_last_week()
    {
        $week_ago = date('Y-m-d H:i:s', strtotime('-7 days'));

        return $this->model->where('is_admin', 0)
                           ->where('created_at', '>' , $week_ago)
                           ->orderBy('name', 'asc')->get();
    }
}