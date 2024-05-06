<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'gov',
        'photo'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function addresses(){
        return $this->hasMany(Address::class);
    }
    public function requests(){
        return $this->hasMany(Request::class);
    }
    public function problems(){
        return $this->hasMany(Problem::class);
    }
    public function notifications(){
        return $this->hasMany(Notification::class);
    }
    public function reviews(){
        return $this->hasMany(Review::class);
    }
    public function ratings(){
        return $this->hasMany(Rating::class);
    }
    public function devices(){
        return $this->hasMany(Device::class);
    }
    public function worker(){
        return $this->hasOne(Worker::class);
    }
}
