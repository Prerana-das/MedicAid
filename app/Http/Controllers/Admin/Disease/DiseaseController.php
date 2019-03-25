<?php

namespace App\Http\Controllers\Admin\Disease;
use App\User;
use App\Disease;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DiseaseController extends Controller
{
    public function index(){
        $user = User::all();
        $table = Disease::orderBy('diseaseID','ASC')->get();
        return view('admin.disease.disease')->with(['table'=>$table, 'user' => $user]);
    }

    public function save(Request $request){
        $table = new Disease();
        $table->diseaseID= $request->diseaseID;
        $table->disease_name = $request->disease_name;
        $table->disease_description = $request->disease_description;
        $table->disease_tag = $request->disease_tag;
        $table->tips = $request->tips;
        $table->save();

        return redirect()->back();
    }

     public function edit(Request $request){

     }	

     public function del($diseaseID){
        $table = Disease::find($diseaseID);
        $table->delete();
        return redirect()->back();
    }
}
