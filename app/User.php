<?php

namespace App;

use App\Models\Collect;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','icon','token','membership','email_verified_at','remember_token','sex','brithday','mobile','site','username','mobile_verified_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //关联 收藏 模型
    public function collect(){
        return $this->hasMany(Collect::class);
    }
}
