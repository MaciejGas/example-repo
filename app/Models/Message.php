<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'topic',
        'question',
        'created_at',
        'updated_at',
        'status'
    ];

    public function client()
    {
        return $this->belongsTo(User::class, 'client_id');
    }  

}
