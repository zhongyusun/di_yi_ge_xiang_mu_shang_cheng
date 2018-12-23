<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    //后台首页
    public function index(){

        admin_has_permission('Admin-index');
        return view('admin.index.index');
    }
}
