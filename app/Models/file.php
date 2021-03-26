<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class file extends Model
{
    use HasFactory;

    protected $fillable = [
        'filename',
        'mimetype',
        'extension',
    ];

    public function posts() {
        return $this->belongsTo('App/Post');
    }
}
