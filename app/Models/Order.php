<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'width',
        'height',
        'place',
        'color',
        'description',
        'status',
        'create_at',
        'updated_at'
    ];

    public function client()
    {
        return $this->belongsTo(User::class, 'client_id');
    }  
}
