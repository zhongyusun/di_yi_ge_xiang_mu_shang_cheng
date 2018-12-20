<?php

namespace App\Http\Controllers\Home;

use App\Models\Cart;
use App\Models\Site;
use Illuminate\Foundation\Testing\Constraints\SeeInOrder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', [
            'except' => [],
        ]);
    }

    /**
     * 加载地址页面
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //从数据库中读取数据
        $datas = Site::all()->where('user_id', auth()->id())->toArray();
        //dd($datas);
        //获取所有的购物车数据
        $carts = Cart::all()->where('user_id', auth()->id())->toArray();
        //dd($carts);
        return view('home.site.index', compact('datas', 'carts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //dd($request->all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $data = $request->all();
        $data['user_id'] = auth()->id();
        //dd($data);
        Site::create($data);
        return redirect()->route('home.site.index')->with('success', '添加成功');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Site $site
     * @return \Illuminate\Http\Response
     */
    public function show(Site $site)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Site $site
     * @return \Illuminate\Http\Response
     */
    public function edit(Site $site)
    {
        return view('home.site.edit', compact('site'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Site $site
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Site $site)
    {
        //dd(1);
        //dd($site->moren);
        if (!$site->moren) {
            //dd(1);
            Site::where('user_id', auth()->id())->where('id', $site['id'])->update(['moren' => 1]);
            Site::where('user_id', auth()->id())->where('id', '!=', $site['id'])->update(['moren' => 0]);
            return ['code' => 99];
        }
        //dd(2);
        $site->update($request->all());
        return redirect()->route('home.site.index')->with('success', '编辑成功');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Site $site
     * @return \Illuminate\Http\Response
     */
    public function destroy(Site $site)
    {
        //dd(1);
        $site->delete();
        return back()->with('success', '删除成功');
    }
}
