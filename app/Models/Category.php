<?php

namespace App\Models;

use Houdunwang\Arr\Arr;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * 重点：在分类操作时，主要看站立的角度问题，角度不同使用的方法就不同 。都是相对而言的
     * 自关联：找子类 或者 父类的方法注意事项：
     * 1. 如果是找子类，是一对多的关系
     * 2. 如果是找父类，是多对一的关系
     * 3. belongTo 和 hasMany 区别：
     * 语法结构： 都是3个参数，
     *  第一个都是被关联的对象模型，
     *  第二个参数： 如果是belongTo，则是内键，如果是hanMany则是外键
     *  第三个参数跟第二各参数恰恰相反
     */
    // ** 找父类 返回值: 所有父类数据 **
    /**
     * 参数                    说明
     * $data                    数组
     * $title                    字段名称
     *  $fieldPri                主键 id
     *  $fieldPid                父 i
     */


    //获取所有分类数据
    public function getTreeData($data)
    {
        return (new Arr())->tree($data, 'title', 'id', 'parent_id');
    }

    //获取编辑时候所有分类栏目数据（不包括自己，和父集）
    public function getEditCategories($id)
    {
       // dd($id);
        //获取全部的栏目数据
        //$categories = self::all();
        //$categories = Category::all();
        $categories = static::all();
        //dd($categories);
        //获取当前编辑数据的子集数据
        $data = $this->getSon($categories, $id);
        //dd($data);
        //将自己追加进去
        $data[] = $id;
        //dd($data);
//        在查询构造器
        $qe = $this->whereNotIn('id', $data)->get();
        //dd($qe);
        return $this->getTreeData($qe->toArray());
    }

    public function getSon($data, $id)
    {
        static $pas = [];
        foreach ($data as $v) {
            if ($id == $v['parent_id']) {
                $pas[] = $v['id'];
                $this->getSon($data, $v['id']);
            }
        }
        return $pas;
    }
}
