<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'message_id',
        'answer_body',
        'created_at',
        'updated_at'
    ];

    public function message()
    {
        return $this->belongsTo(Message::class, 'message_id');
    }  
}
