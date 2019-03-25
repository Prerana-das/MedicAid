<?php

namespace App\Http\Controllers\Admin\Gender;
use App\User;
use App\Gender;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GenderController extends Controller
{
    public function index(){
        $user = User::all();
        $table = Gender::orderBy('genderID','ASC')->get();
        return view('admin.gender.gender')->with(['table'=>$table, 'user' => $user]);
    }

    public function save(Request $request){
        $table = new Gender();
        $table->genderID= $request->genderID;
        $table->gender_name = $request->gender_name;

        $table->save();

        return redirect()->back();
    }

     public function edit(Request $request){

     }

     public function del($genderID){
        $table = Gender::find($genderID);
        $table->delete();
        return redirect()->back();
    }
}
