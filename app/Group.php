<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Group extends Model
{
    //
    protected $fillable = ['name'];

    public function agendas(){
        return $this->hasMany('App\Agenda');
    }

    use Sortable;
    public $sortable = ['updated_at'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
