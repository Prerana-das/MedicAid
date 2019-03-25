<?php

namespace App\Http\Controllers\Admin\Age;
use App\User;
use App\Age;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AgeController extends Controller
{
 	public function index(){
        $user = User::all();
        $table = Age::orderBy('ageID','ASC')->get();
        return view('admin.age.age')->with(['table'=>$table, 'user' => $user]);
    }

    public function save(Request $request){
        $table = new Age();
        $table->ageID= $request->ageID;
        $table->age = $request->age;

        $table->save();

        return redirect()->back();
    }

     public function edit(Request $request){

     }

     public function del($ageID){
        $table = Age::find($ageID);
        $table->delete();
        return redirect()->back();
    }	
}
