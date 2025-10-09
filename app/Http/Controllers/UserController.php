<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller{
    //
    public function register(Request $request){
        $input = $request -> validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required'
        ]);
        $input['password']=Hash::make($request->password);
        if($request->hasFile('profile')){
            $file=$request->file('profile');
            $filename=time().'_'.$file->getClientOriginalName();
            $file->move('upload',$filename);
            $input['profile']=url('upload/'.$filename);
        }
        $insert =User::create($input);
        return response()->json([
            'status'  => true,
            'message' => 'User registered successfully',
            'data'    => $insert
        ], 201);
    }

    public function getUser(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');

        $user = User::where('email', $email)
                    ->where('password', $password)
                    ->first();

        if (!$user) {
            return response()->json([
                'status' => false,
                'message' => 'Invalid email or password',
            ], 401);
        }

        return response()->json([
            'status' => true,
            'message' => 'User retrieved successfully',
            'data' => [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'profile' => $user->profile,
                'role' => $user->role
            ]
        ]);
    }
}
