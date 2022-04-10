<?php

namespace App\Repositories;

use App\Models\Message;

use DB;

class MessageRepository extends BaseRepository{

    public function __construct(Message $model){

        $this->model= $model;
    }

    public function get_active_messages()
    {
        return $this->model->where('status', 'active')->get();
    }

    public function get_messages_by_client($id)
    {
        return $this->model->where('client_id', $id)->get();
    }

    public function all_messages()
    {
        return $this->model->orderBy('created_at', 'asc')->get();
    }

    public function messages_last_month()
    {
        $month_ago = date('Y-m-d H:i:s', strtotime('-1 month'));

        return $this->model->where('created_at', '>' , $month_ago)
                           ->orderBy('created_at', 'asc')->get();
    }

    public function messages_last_week()
    {
        $week_ago = date('Y-m-d H:i:s', strtotime('-7 days'));

        return $this->model->where('created_at', '>' , $week_ago)
                           ->orderBy('created_at', 'asc')->get();
    }

}