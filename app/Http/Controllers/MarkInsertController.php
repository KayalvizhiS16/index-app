<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MarkInsertController extends Controller
{
    //
    public function insert_form(){
        return view('insert_form');
    }
    public function insert(Request $request){
        $subname =$request->input('subject_name');
        DB::insert("insert into mark(subname) values(?)",[$subname]);
        return 'Record inserted sucessfully <a href="/">click here to go back</a>';
    }
}
