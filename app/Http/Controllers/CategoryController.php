<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $data = Category::orderBy('id','desc')->get();
        return response()->json([
            'data'=>$data
        ]);
    }

    public function store(Request $request){
        $request->validate([
            'name'=>'required|string'
        ]);

        $data = Category::create([
            'name' => $request->name
        ]);

        return response()->json([
            "data"=>$data
        ]);
    }

    public function show($id){
        $data = Category::find($id);
        return response()->json([
            "data"=>$data
        ]);
    }

    public function edite(Request $request,$id){
        $cat = Category::find($id);
        $data = $cat->update($request->all());
        return response()->json([
            "data"=>$data
        ]);
    }

    public function destroy($id){
        $data = Category::find($id);
        $data->delete();
        return response()->json([
            'message' => 'Category successfully deleted.'
        ]);
    }
}
