<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'img',
        'description',
        'parent_id'
    ];
    public function devices()
    {
        return $this->hasMany(Device::class);
    }
    public function requests()
    {
        return $this->hasMany(Request::class);
    }
    public function workers()
    {
        return $this->hasMany(Worker::class);
    }
}
