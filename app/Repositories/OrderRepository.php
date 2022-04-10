<?php

namespace App\Repositories;

use App\Models\Order;

use DB;

class OrderRepository extends BaseRepository{

    public function __construct(Order $model){

        $this->model= $model;
    }

    public function get_active_orders()
    {
        return $this->model->where('status', 'active')->get();
    }

    public function all_orders()
    {
        return $this->model->orderBy('created_at', 'asc')->get();
    }

    public function orders_last_month()
    {
        $month_ago = date('Y-m-d H:i:s', strtotime('-1 month'));

        return $this->model->where('created_at', '>' , $month_ago)
                           ->orderBy('created_at', 'asc')->get();
    }

    public function orders_last_week()
    {
        $week_ago = date('Y-m-d H:i:s', strtotime('-7 days'));

        return $this->model->where('created_at', '>' , $week_ago)
                           ->orderBy('created_at', 'asc')->get();
    }

}