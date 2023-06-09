<?php
namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Http\Requests\HelloRequest;

class HelloController extends Controller{
    public function index(Request  $request){
        /*$date= ["msg"=>"これはコントローラから渡されたメッセージです。",
    "id"=>$request->id];
        return view("hello.index",$date);*/
        /*3-2$data=["msg"=>"お名前を入力してください。"];
        return view("hello.index",$data);*/
        
        /*return view("hello.index",["message"=>"Hello!"]);*/

        return view("hello.index",["msg"=>"フォームを入力："]);
    }

    public function post(HelloRequest  $request){


        return view("hello.index",["msg"=>"正しい入力されました。"]);
    }
}