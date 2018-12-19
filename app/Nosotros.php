<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nosotros extends Model
{
    protected $table = 'abouts';

    protected $fillable = ['h1', 'content', 'status'];

    public function user() {
    	return $this->belongsTo('App\User', 'user_id');
    }
}
