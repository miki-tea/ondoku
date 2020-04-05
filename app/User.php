<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Mail\ResetPassword;
use Illuminate\Support\Facades\Mail;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * パスワード再設定メールを送信する
     */

     public function sendPasswordResetNotification($token)
     {
         Mail::to($this)->send(new ResetPassword($token));
     }

     //リレーション設定
     public function groups(){
        return $this->hasMany('App\Group');
     }

     public function agendas(){
        return $this->hasMany('App\Agenda');
     }
     public function comments(){
        return $this->hasMany('App\Comment');
     }
}
