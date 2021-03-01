<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function __construct()
    {

        $this->middleware('auth');
        $menus = DB::table('m_menus')->get()->where('is_menu',1)->groupBy('function_division');
        $menuArr = ['Khai báo','Phê duyệt','Công ty','Nhân sự','Quản lý dự án','Cài đặt hệ thống',''];
        $iconArr = [    'fa fa-calendar',
            'fa fa-tasks',
            'fa fa-home',
            'fa fa-user',
            'fa fa-usd',
            'fa fa-cogs',''];
        \Illuminate\Support\Facades\View::share('menus',$menus);
        \Illuminate\Support\Facades\View::share('menuArr',$menuArr);
        \Illuminate\Support\Facades\View::share('iconArr',$iconArr);
//        return view('layouts.app',['menus' => $menus]);
    }
    public function username()
    {
        return 'employee_code';
    }
}

