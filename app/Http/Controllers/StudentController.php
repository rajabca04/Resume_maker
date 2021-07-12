<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index(){
        $data = DB::table('student')->get();
        return view("index",["data"=>$data]);
    }


    public function input(Request $inp){
        DB::table('student')->insert([
            "name" =>$inp->name,
            "email" =>$inp->email,
            "contact" =>$inp->contact,
            "streem" =>$inp->streem,
            "technology" =>$inp->technology,
            "exprience" =>$inp->exprience,
            "description" =>$inp->description
        ]);

        return redirect()->back();
    }

    public function Update($id){
        $data = DB::table('student')->find($id);
        return view("updata",["item"=>$data]);
    }

    public function Modify(Request $req,$id){
        $data = DB::table('student')->where("id",$id)->update([
            "name" =>$req->name,
            "email" =>$req->email,
            "contact" =>$req->contact,
            "streem" =>$req->streem,
            "technology" =>$req->technology,
            "exprience" =>$req->exprience,
            "description" =>$req->description
        ]);

        return redirect()->route("homepage");
    }

    public function delete($id){
        DB::table('student')->where("id",$id)->delete();
        return redirect()->back();
    }

}
