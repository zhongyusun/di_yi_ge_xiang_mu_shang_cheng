<?php

namespace App\Http\Controllers\Admin;

use App\Models\Flash;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FlashController extends Controller
{
    public function index()
    {
        admin_has_permission('Admin-flash');
        $flashs = Flash::all();
        return view('admin.flash.index', compact('flashs'));
    }

    public function create()
    {
        admin_has_permission('Admin-flash');

        return view('admin.flash.create');
    }


    public function store(Request $request)
    {
        admin_has_permission('Admin-flash');
        //dd($request->all());
        $this->validate($request, [
            'title' => 'required',
            'path' => 'required'
        ], [
            'title.required' => '标题不能为空',
            'path.required' => '请上传图片',
        ]);
        Flash::create($request->all());
        return redirect()->route('admin.flash.index')->with('success', '添加成功');

    }
    public function edit($flash){
        admin_has_permission('Admin-flash');
        //dd($flash);
        $flashs=Flash::where('id',$flash)->first();

        //dd($flashs);
        return view('admin.flash.edit',compact('flash','flashs'));
    }

    public function update(Flash $flash,Request $request){
        admin_has_permission('Admin-flash');
    //dd($request->all());
        $this->validate($request, [
            'title' => 'required',
            'path' => 'required'
        ], [
            'title.required' => '标题不能为空',
            'path.required' => '请上传图片',
        ]);
        $flash->update($request->all());
        return redirect()->route('admin.flash.index')->with('success','编辑成功');
    }


    public function destroy(Flash $flash){
        $flash->delete();
        return back()->with('success','删除成功');
    }
}
