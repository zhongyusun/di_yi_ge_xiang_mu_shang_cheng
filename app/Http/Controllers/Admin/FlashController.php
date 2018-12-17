<?php

namespace App\Http\Controllers\Admin;

use App\Models\Flash;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FlashController extends Controller
{
    public function index()
    {
        $flashs = Flash::all();
        return view('admin.flash.index', compact('flashs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.flash.create');
    }


    public function store(Request $request)
    {
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
}
