<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    //
    protected $fillable = ['title', 'body'];

    //リレーション
    public function comments(){
        return $this->hasMany('App\Comment');
    }
    public function group() {
        return $this->belongsTo('App\Group');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
