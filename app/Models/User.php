<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Declare one-to-one relationship with Profile
    public function profile(){
        return $this->hasOne('App/Profile');
    }

    // Declare relationship to Roles to grant different permissions
    // User may have one role or many roles
    public function role() {
        return $this->belongsTo('App/Role');
    }

    public function roles() {
        return $this->belongsToMany('App/Role');
    }

    // public function post() {
    //     return $this->hasOne(Post::class);
    // }

    public function posts() {
        return $this->hasMany(Post::class);
    }
}
