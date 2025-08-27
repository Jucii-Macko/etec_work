<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    //
    public function allStudent(){
        return view('Backend.allStudent');
    }
    public function pageAddStudent(){
        return view('Backend.addStudent');
    }
    public function addStudent(Request $request){
        $input = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'age' => 'required|integer',
            'gender' => 'required',
            'dob' => 'required|date',
            'email' => 'required|email|unique:users,email',
            'major' => 'required',
            'uni' => 'required',
            'address' => 'required',
            'phone' => 'required|unique:users,phone',
            'password' => 'required|min:6',
        ]);

        $input['password']=Hash::make($input['password']);
        if($request->hasFile('img')){
            $file=$request->file('img');
            $filename=time().'_'.$file->getClientOriginalName();
            $file->move('upload',$filename);
            $input['img']=url('upload/'.$filename);
        }
        // insert into db
        $insert=Student::create($input);
        
    }
}
