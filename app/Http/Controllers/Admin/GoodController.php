<?php

namespace App\Http\Controllers\Admin;


use App\Http\Requests\GoodRequest;
use App\Models\Category;
use App\Models\Good;
use App\Models\Spec;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class GoodController extends Controller
{

    //加载商品列表
    public function index()
    {
        //获取所有的数据
        $goods = Good::paginate(10);
        //dd($datas);
        return view('admin.good.index', compact('goods'));
    }

    //加载商品添加页面
    public function create(Category $category)
    {
        //加载所有的分类数据
        $categories = $category->getTreeData(Category::all()->toArray());
        //dd($categories);
        return view('admin.good.creat', compact('categories'));
    }

    //处理商品添加数据
    public function store(GoodRequest $request, Good $good)
    {
        //dd($request->all());
        $data = $request->all();
        // dd($data);
        //添加管理员id
        //dd(auth('admin')->id());
        $data['admin_id'] = auth('admin')->id();
//        dd($data);
        //dd($data);
        //将josn转为数组
        $specs = json_decode($data['specs'], true);
        //dd($specs);
        //计算商品的总数量
        $total = 0;
        //循环$specs
        foreach ($specs as $v) {
            $total += $v['total'];
        }
        //dd($total);
        $data['total'] = $total;
        //dd($data);
        //执行完成 create 之后,返回当前添加数据对象
        $good = $good->create($data);
//        dd($good);
        //添加商品详情表
        foreach ($specs as $v) {
            $spec = new Spec();
            $spec->spec = $v['spec'];
            $spec->total = $v['total'];
            $spec->good_id = $good->id;
            $spec->save();

        }
        return redirect()->route('admin.good.create')->with('success', '添加成功');
    }


    //加载商品编辑页面
    public function edit(Good $good, Category $category)
    {
        $pics = $good['pics'];
//        dd($pics);
        //dd($good->specs);
        $specs = $good->specs;

        $categories = $category->getTreeData(Category::all()->toArray());
        return view('admin.good.edit', compact('good', 'categories', 'pics', 'specs'));
    }

    //处理上商品编辑数据
    public function update(GoodRequest $request, Good $good)
    {
        $good->specs()->delete();
        //dd($request->all());
        $data = $request->all();
        $data['admin_id'] = auth('admin')->id();
        $specs = json_decode($data['specs'], true);
        $total = 0;
        foreach ($specs as $v) {
            $total += $v['total'];
        }
        $data['total'] = $total;

        $good->update($data);

        foreach ($specs as $v) {
            //dd($v);
            $spec = new Spec();
            $spec->spec = $v['spec'];
            $spec->total = $v['total'];
            $spec->good_id = $v['good_id'];
            $spec->save();
        }
        return redirect()->route('admin.good.index')->with('success', '更新成功');
    }

    //删除商品
    public function destroy(Good $good)
    {
        //dd($good);
        $good->delete();
        return redirect()->back()->with('success', '删除成功');
    }
}
