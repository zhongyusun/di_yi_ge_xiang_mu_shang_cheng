<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Good extends Model
{
    protected $fillable=['title','price','admin_id','category_id','list_pic','description','content','pics','total'];

    protected $casts    = [
        'pics' => 'array'
    ];
   //获取商品分类名称
    public function getCatId()
    {
        // 得到的一个集合对象 这里是用来了模型的概念，来调用自己的一个属性来获取到当前商品所在的分类
        // 但是这只是取出了分类的ID ，所以要通过ID 找到对应的分类数据从而取出分类的名称 title的值。
        $categories_id = $this->category_id;
        //dd($categories_id);
        $name=Category::find($categories_id);
        return $name['title'];
    }
    //关联规格
    public function specs(){
        return $this->hasMany(Spec::class,'good_id','id');
    }
}
