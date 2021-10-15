<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Traits\GeneralTrait;
use App\Models\Api\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    use GeneralTrait;
    public function index(){
        $categories = Category::select('id','name_' . app()->getLocale())->get();
        return response()->json($categories);

    }
    public function getmaincategoriesbyid(Request $request){
        $category = Category::select('id','name_' . app()->getLocale())->find($request -> id);
       if(!$category)
           return $this->returnError('001','not found id ..');

        return $this->returnData('category',$category,'ssucc');
    }
    public function changeActive(Request $request){
       $category = Category::where('id',$request->id)->update(['active'=>$request->active]);
      return $this->returnSuccessMessage('succ modify','002');
    }
}

