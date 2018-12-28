<?php

namespace App\Http\Controllers\Home;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Flash;
use App\Models\Good;
use App\Models\Spec;
use App\User;
use Houdunwang\Arr\Arr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;

class HomeController extends Controller
{
    public function index(Category $category)
    {
        //获取所有的分类数据
        $categories = Category::all()->toArray();

        //获取所有的父集分类和所有子集分类的数据
        $categoryData = (new Arr())->channelLevel($categories, $parent_id = 0, $html = "&nbsp;", $fieldPri = 'id', $fieldPid = 'parent_id');

        //获取购物车中的数据
        $carts = Cart::all()->where('user_id', auth()->id())->toArray();

        //第一楼推荐
            //右侧3个数据
            $latestGood=Good::latest()->limit( 3 )->get();

            //第一个数据
            $firgood=Good::where('category_id',6)->inRandomOrder()->limit(1)->get();

            //随机获取8条分类
            $randomcategory=Category::inRandomOrder()->limit(8)->get();

            //随机获取三条商品
            $rangoods=Good::inRandomOrder()->limit(3)->get();

        //获取家用电器（子集）相关分类的商品
            Category::$temp=[];
            //找家用电器所有子集数据
            $onesonIds  =$category->getSon( $categories , 1 );
            //将本身也添加进去
            $onesonIds[]=1;
            //获取家用电器下所有的商品
            $oneFloor=[
                'name'=>'家用电器' ,
                'data'=>Good::whereIn( 'category_id' , $onesonIds )->get()
            ];
            //随机循环三条轮播图商品
            $oneflash=Good::where('category_id',$categories['0'])->get();
        //获取电子数码相关分类商品
            Category::$temp=[];
            //找电子数码所有子集数据
            $twosonIds  =$category->getSon( $categories , 2 );
            //将本身也添加进去
            $twosonIds[]=2;
            //获取家用电器下所有的商品
            $twoFloor=[
                'name'=>'电子数码' ,
                'data'=>Good::whereIn( 'category_id' , $twosonIds )->get()
            ];
            //随机循环三条轮播图商品
            $twoflash=Good::where('category_id',$categories['1'])->get();
        //获取服装服饰的商品
            Category::$temp=[];
            //找服装服饰所有子集数据
            $threesonIds=$category->getSon( $categories , 3 );
            //将本身也添加进去
            $threesonIds[]=3;
            //获取服装服饰下所有的商品
            $threeFloor=[
                'name'=>'服装服饰' ,
                'data'=>Good::whereIn( 'category_id' , $threesonIds )->get()
            ];
            //随机循环三条轮播图商品
            $threeflash=Good::where('category_id',$categories['2'])->get();
        //玩具乐器
        Category::$temp=[];
            //找玩具乐器所有子集数据
            $sisonIds=$category->getSon( $categories , 4 );
            //将本身也添加进去
            $sisonIds[]=4;
            //获取玩具乐器下所有的商品
            $siFloor=[
                'name'=>'玩具乐器' ,
                'data'=>Good::whereIn( 'category_id' , $sisonIds )->get()
            ];
            //随机循环三条轮播图商品
            $siflash=Good::where('category_id',$categories['3'])->get();
        //特色商品
            //随机一条数据
            $tesegoods=Good::inRandomOrder()->limit(1)->get();
            //dd($tesegoods);
            //随机获得两件商品
            $tegoods=Good::inRandomOrder()->limit(2)->get();
            $segoods=Good::inRandomOrder()->limit(2)->get();
            //随机获取6件商品
            $goods=Good::inRandomOrder()->limit(6)->get();

            //获取轮播图数据
        $flashs=Flash::all();
        //dd($flashs);
        return view('home.index', compact('flashs','goods','tegoods','segoods','tesegoods','siFloor','siflash','threeflash','threeFloor','twoFloor','twoflash','categoryData', 'carts','latestGood','firgood','randomcategory','rangoods','oneFloor','oneflash'));

    }

    //扣扣回调地址
    public function qqback()
    {
        $userinfo = Socialite::driver('qq')->user();
        //dd($userinfo);
        $user=User::all()->where('open_id',$userinfo->id)->first();
        //dd($user);
        if (!$user){
            $user=new User();
            $user->open_id=$userinfo->id;
            $user->name=$userinfo->nickname;
            $user->icon=$userinfo->avatar;
            $user->save();
        }
        //执行登录
        auth()->login($user);
        //跳转
        return redirect('/')->with('success','登录成功');
    }

    //搜索
    public function search(Request $request)
    {
        $carts = Cart::all()->where('user_id', auth()->id())->toArray();
        //dd(1);
        //接受搜所的关键词
        $wd = $request->query('wd');
        //所有搜索的商品
        $goods=Good::search($wd)->get();
        //通过栏目搜索的商品

        //$cartgories=Category::search($wd)->get();
        //dd($cartgories);
        foreach ($goods as $good){
            $id=$good->specs->toArray();
        }
        //dd($goods);
        //dd($id);
        $id=current($id);
        $id=$id['id'];
        //dd($id);
        return view('home.search.search',compact('goods','carts','id'));
    }
}
