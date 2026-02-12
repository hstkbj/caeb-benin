<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    
    public function AllRoles(){
        $role = Role::orderBy('id','desc')->get();
        $select = Role::orderBy('id','desc')->get();
        return response()->json([
            "role"=> $role,
            "select"=> $select
        ]);  
    }

    public function store(Request $request){
        $request->validate([
            "name"=>"required"
        ]);

        $role = Role::create([
            "name"=>$request->name
        ]);

        return response()->json([
            "data"=>$role
        ]);
    }

    public function show($id){
        $role = Role::find($id);
        return response()->json([
            "data"=>$role
        ]);
    }

    public function update(Request $request,$id){
        $data = Role::find($id);
        $role = $data->update($request->all());
        return response()->json([
            "data"=>$role
        ]);
    }

    public function destroy($id){
        $data = Role::find($id);
        $role = $data->delete();
        return response()->json([
            "data"=>$role
        ]);
    }

}
