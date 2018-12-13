<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategryController extends Controller
{
    //加载分类页面
    public function index(Category $category)
    {
        //树状结构:https://packagist.org/packages/houdunwang/arr
        //安装方式:composer require houdunwang/arr
        $categories=$category->getTreeData(Category::all()->toArray());
        //dd($categories);
        return view('admin.category.index',compact('categories'));
    }

    //加载添加分类页面
    public function create(Category $category)
    {
        // 因为在添加是，要选择是哪个分类下的数据，所以要获取所有分类数据，用下拉框表单来遍历数据
        //获取所有的父级分类
        $categories=$category->getTreeData(Category::all()->toArray());
        //dd($categories);
        return view('admin.category.create',compact('categories'));
    }

   //处理添加分类数据
    public function store(CategoryRequest $request,Category $category)
    {
        // 因为每次添加的是一条数据，所以这里用Crete方法就可以添加数据了
        //dd($request->all());
        $category->title=$request->title;
        $category->parent_id=$request->parent_id;
        $category->save();
        return redirect()->route('admin.category.create')->with('success','分类添加成功');
    }

    //加载分类编辑页面
    public function edit(Category $category)
    {
        //dd($category->toArray());
        // 因为是编辑单条数据，所以这里用依赖注入的形式，获取到当前被编辑的单条数据对象进行处理
        //$categories=$category->getTreeData(Category::all()->toArray());
        //dd($category['id']);
        $categories=$category->getEditCategories($category['id']);
        return view('admin.category.edit',compact('category','categories'));
    }

    //处理分类编辑数据
    public function update(CategoryRequest $request, Category $category)
    {
        //dd($request->toArray());
        $category->title=$request->title;
        $category->parent_id=$request->parent_id;
        $category->update();
        return redirect()->route('admin.category.index')->with('success','分类编辑成功');
    }

    //删除分类
    public function destroy(Category $category)
    {
        // 检测当前需要删除的分类是否有子分类,如果有,不让删除
        if (Category::where('parent_id',$category['id'])->first()){
           return redirect()->back()->with('danger','请先删除子集');
        }
        $category->delete();
        return redirect()->back()->with('success','删除成功');
    }
}
