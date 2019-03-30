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

        $data = $request->only('sym1','sym2','sym3','sym4');
        $table['disease_tag'] = json_encode($data);

        $table->tips = $request->tips;
        $table->save();

        return redirect()->back();
    }

     public function edit(Request $request){
        $table = Disease::find($request->diseaseID);
        $table->diseaseID= $request->diseaseID;
        $table->disease_name = $request->disease_name;
        $table->disease_description = $request->disease_description;

        $data = $request->only('sym1','sym2','sym3','sym4');
        $table['disease_tag'] = json_encode($data);

        $table->tips = $request->tips;
        $table->save();
        return redirect()->back(); 
     }	

     public function del($diseaseID){
        $table = Disease::find($diseaseID);
        $table->delete();
        return redirect()->back();
    }
}
