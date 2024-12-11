<?php

namespace App\Http\Controllers;

use App\Models\User;
use Http;
use Illuminate\Support\Facades\Auth;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function registerUser(Request $request){
        $userObj = new User();
        $userObj->name = $request->full_name;
        $userObj->email = $request->email;
        $userObj->password = Hash::make($request->password);

        if($userObj->save()){
            return response()->json(["message" => "success","data" => $userObj->toArray()],201);
        }else{
            return response()->json(["message"=> "Something went wrong" , "data" => []],500);
        }
    }
    public function login(Request $request){
        // dd($request->all());
        $validateUser = Validator::make(
            $request->all(),
            [
                'email' =>'required|email',
                'password'=>'required',
            ]
            );
             if($validateUser->fails()){
                return response()->json(['message'=> $validateUser->errors()],400);
    }
    if (Auth::attempt(['email'=>$request->email,'password'=>$request->password])) {
      
            $user = $request->user();
            $token = $user->createToken('api')->plainTextToken;
            return response()->json([ 'message' => 'Login successful','data' => $user,'token' => $token, 'token_type'=>'bearer' ], 200);
    }else{
        return response()->json(["message"=> "Something went wrong" , "data" => []],401);
    }
    }
    public function logout(Request $request){
       $deleted= $request->user()->tokens()->delete();
       if($deleted){
        return response()->json(["message" => "User logged out successfully"], 200);
       }else{
        return response()->json(["message"=> "only authenticated user can access this part of the site"], 401);
       }
 
    }

    public function show(Request $request){
        $userObj = User::all();
        // dd($userObj);

        if($userObj->isEmpty()){
            return response()->json(["message"=> "only authenticated user can access this part of the site"], 401);
           
        }else{
            return response()->json(['message' => "success","data"=> $userObj],200);  
          
           
    }
}
    // public function curl(Request $request){
    //     $response = Http::get('http://127.0.0.1:8000/api/user/home');
        
    //     dd($response->json());
    // }
}