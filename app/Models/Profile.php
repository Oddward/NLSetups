<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
    	'first_name',
    	'last_name',
    	'phone_model',
    ];

    // Declare one-to-one relationship with User
    public function user(){
    	return $this->belongsTo('App/User');
    }
}
