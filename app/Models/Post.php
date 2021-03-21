<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
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
    public function users() {
    	return $this->belongsTo('App/User');
    }

    public function tags() {
    	return $this->belongsToMany('App/Tag');
    }

    // Get all comments, if available
    // public function comments() {
    // 	return $this->morphMany('App/Comment', 'commentable');
    // }
}
