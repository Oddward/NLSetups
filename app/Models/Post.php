<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
    	'description',
    	'image_path',
    	'user_id',
    	'likes',
    	// 'tags',
    ];

    protected $hidden = [
    	'tags',
    	'remember_token',
    ];

    /**
     * Declare relationship to Users
     * 
	 * One role may have one user or many users
     */
    public function user() {
    	return $this->belongsTo(User::class);
    }

    public function tags() {
    	return $this->belongsToMany('App/Tag');
    }

    public function file() {
        return $this->hasOne('App/File');
    }

    public function files() {
        return $this->hasMany('App/File');
    }

    // Get all comments, if available
    // public function comments() {
    // 	return $this->morphMany('App/Comment', 'commentable');
    // }
}
