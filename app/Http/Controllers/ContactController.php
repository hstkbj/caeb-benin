<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $data = Contact::orderBy('id','desc')->get();
        return response()->json([
            "data"=>$data
        ]);
    }

    public function store (Request $request){
        $request->validate([
            'full_name'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'subject'=>'required',
            'message'=>'required',
        ]);

        $data = Contact::create([
            'full_name'=>$request->full_name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'subject'=>$request->subject,
            'message'=>$request->message,
        ]);

        return response()->json([
            "data" => $data
        ]);
    }

    public function show($id){
        $data = Contact::find($id);
        return response()->json([
            "data"=>$data
        ]);
    }

    public function destroy($id){
        $contact = Contact::find($id);

        if ($contact) {
            $contact->delete();
            return response()->json([
                'status' => 200,
                'message' => 'Contact deleted successfully'
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Contact not found'
            ]);
        }
    }
}
