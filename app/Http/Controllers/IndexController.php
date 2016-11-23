<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $friends = \App\Friend::get();
        $config = \App\Config::first();
        view()->share('friends',$friends);
        view()->share('my_config', $config);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cases = \App\Cases::where('is_index', 1);
        return view('index', compact($cases));
    }

    public function anli()
    {
        $cases = \App\Cases::get();
        return view('case', compact($cases));
    }

    public function fuwu()
    {
        return view('fuwu');
    }

    public function zixun()
    {
        return view('zixun');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}
