<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class MyController extends Controller
{
    public $myvar = "Hello Worle";
    public function __construct() {//MyController ทำงานทันที

    }
    public function index(){
        return view('home');
    }
    public function store(Request $req) {
        $data['myinput'] = $req->input('myinput');
        return view('myroute',$data);
    }
}
