<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    protected $responseArr=[
        "error"=>true,
        "message"=>'No se encontraron imagenes',
        "lenght"=>0,
        "images"=>[],
        "created_by"=>"danidoble",
        "web_site"=>"https://danidoble.com",
    ];
    public function index(Request $request){
        //if($request->isJson()) {
            if(isset($request['image'])){
                $id=intval($request['image']);
                $image=Image::find($id);
                if(!empty($image)){
                    $this->responseArr['error']=false;
                    $this->responseArr['message']='Completed';
                    $this->responseArr['lenght']=1;
                    $this->responseArr['images']=$image;
                    return $this->responseArr;
                }
                return $this->responseArr;
            }elseif(isset($request['query'])){
                $images=Image::where('categorias','like','%'.$request["query"].'%')->OrderBy('created_at','desc')->get();
                $this->responseArr['error']=false;
                $this->responseArr['message']='Completed';
                $this->responseArr['query']=$request['query'];
                $this->responseArr['lenght']=count($images);
                $this->responseArr['images']=$images;
                return $this->responseArr;
            }
            $images=Image::OrderBy('created_at','desc')->get();
            $this->responseArr['error']=false;
            $this->responseArr['message']='Completed';
            $this->responseArr['lenght']=count($images);
            $this->responseArr['images']=$images;
            return $this->responseArr;
        /*}
        $this->responseArr['message']="Esta aplicacion solo permite peticiones JSON";
        return response()->json();*/
    }
}
