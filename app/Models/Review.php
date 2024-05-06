<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'title',
        'content',
        'request_id',
        'worker_id'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function request()
    {
        return $this->belongsTo(Request::class);
    }
    public function worker()
    {
        return $this->belongsTo(Worker::class);
    }
    public function rate()
    {
        return $this->hasOne(Rating::class,'model_id');
    }
}
