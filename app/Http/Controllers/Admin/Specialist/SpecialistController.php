<?php

namespace App\Http\Controllers\Admin\Specialist;
use App\User;
use App\Specialist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SpecialistController extends Controller
{
    public function index(){
        $user = User::all();
        $table = Specialist::orderBy('specialistID','ASC')->get();
        return view('admin.specialist.specialist')->with(['table'=>$table, 'user' => $user]);
    }

     public function save(Request $request){
        $table = new Specialist();
        $table->specialistID= $request->specialistID;
        $table->specialist_name = $request->specialist_name;

        $table->save();

        return redirect()->back();
    }
}
