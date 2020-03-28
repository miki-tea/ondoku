<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    //
    protected $fillable = ['title', 'body'];

    public function comments(){
        return $this->hasMany('App\Comment');
    }
    public function group() {
        return $this->belongsTo('App\Group');
    }
}
