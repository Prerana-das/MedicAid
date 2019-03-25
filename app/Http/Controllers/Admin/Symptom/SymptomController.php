<?php

namespace App\Http\Controllers\Admin\Symptom;
use App\User;
use App\Symptom;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SymptomController extends Controller
{
    public function index(){
        $user = User::all();
        $table = Symptom::orderBy('symptomID','ASC')->get();
        return view('admin.symptom.symptom')->with(['table'=>$table, 'user' => $user]);
    }

    public function save(Request $request){
        $table = new Symptom();
        $table->symptomID= $request->symptomID;
        $table->symptom_name = $request->symptom_name;

        $table->save();

        return redirect()->back();
    }

     public function edit(Request $request){

     }


	public function del($symptomID){
        $table = Symptom::find($symptomID);
        $table->delete();
        return redirect()->back();
    }
}
