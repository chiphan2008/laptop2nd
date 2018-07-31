<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index');
    }

    public function getNews()
    {
        return view('admin.news');
    }

    public function getNewsForm(Request $request)
    {
        return view('admin.newsForm',['id'=>$request->id]);
    }
    public function postNewsForm(Request $request)
    {
        //var_dump($request->tieude);
        return view('admin.news');
    }

    public function getDelNews($id=0)
    {
        return view('admin.news');
    }
}
