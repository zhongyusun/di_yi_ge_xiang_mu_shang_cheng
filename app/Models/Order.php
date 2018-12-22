<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //订单管联订单详情
    public function orderDetail()
    {
        return $this->hasMany(OrderDetail::class);
    }
    //订单关联用户
    public function user(){
        return $this->belongsTo(User::class);
    }
}
