<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;

class HomeController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function credentials(){
        return view('credentials');
    }

    public function adminCreate(){
        return view('admin.create');
    }

    public function adminInsert(Request $request){
        $this->validate($request,[
            "url"=>['required','url'],
            "categorias"=>['required'],
        ]);
        $image=new Image();
        $image->url=$request->input('url');
        $image->categorias=$request->input('categorias');
        $image->save();
        return redirect()->route('admin.create')->with(['message'=>'success']);
    }
}
