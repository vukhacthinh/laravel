<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ThinkController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }
    public function index(){
        $users = DB::table('employees')->paginate(15);
        return view('think.index',['users' => $users]);
    }
    public function edit($id){
        $user = DB::table('employees')->find($id);
        return view('think.edit',['user' => $user]);
    }
    public function view($id){
        $user = DB::table('employees')->find($id);
        return view('think.index',['user' => $user]);
    }
}
