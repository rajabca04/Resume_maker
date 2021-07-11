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
}
