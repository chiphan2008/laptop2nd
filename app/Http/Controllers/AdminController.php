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

    public function getNewsForm($id=0)
    {
        echo $id;
        return view('admin.newsForm',['id'=>$id]);
    }
}
