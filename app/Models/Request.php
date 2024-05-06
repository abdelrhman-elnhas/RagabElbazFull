<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    use HasFactory;
    protected $fillable=[
        'img',
        'video',
        'phone',
        'description',
        'invoice',
        'date',
        'time',
        'status',
        'preview',
        'install',
        'user_id',
        'category_id',
        'address_id',
        'worker_id',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
    public function problems()
    {
        return $this->hasMany(Problem::class);
    }
}
