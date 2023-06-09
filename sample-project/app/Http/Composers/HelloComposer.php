<?php
namespace App\Http\Composers;

use Illuminate\View\View;
class HelloComposer{
    public function compose(View $view){
        /*$view->with("view_message",'this view is"'.$view->getName().'"!!');*/
    }
    public function index(Request $request){
        
        return view("hello.index",["data"=>$request->data]);
    }
}
?>