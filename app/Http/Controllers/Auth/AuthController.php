<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tutor;
use App\Models\Student;
use Hash;
use Auth;
use Validator;
class AuthController extends Controller
{
    
    public function signup(){
        return view('Tutor/Auth/signup');
        
    }
    public function signin(){
        return view('Tutor/Auth/signin');
        
    }
    // Tutor signup Method start
    public function createAccount(Request $request){
         
        $userType = $request->user_type;
        
        
       
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:'.$userType.'s',
            'name' => 'required|string|max:50',
            'phone' => 'required|integer|min:10',
            'password' => 'required'
        ]);
         
        if ($validator->fails()) {
           
             return response()->json(['status' => 'failed','message' => $validator->messages()->first(), ]);

        }else{
           $password = Hash::make($request->password);
           if($userType=='tutor'){
            $tutor= new Tutor;

        }else{
            $tutor= new Student;

        }
           
           $tutor->email = $request->email;
           $tutor->password = $password;
           $tutor->phone = $request->phone;
           $tutor->first_name = $request->name;
           $tutor->user_type = 1;
           $tutor->save();
       
       if($tutor->save()){
           return response()->json([
               'status' => 'success',
                'message' => $userType.' Signup Succesfull',
                'redirect_uri' => '/', 
                'data' => $tutor ]);
        }else{
            return response()->json([
                'status' => 'failed',
                 'message' => 'Somthing went wrong',
                 'redirect_uri' => '/', 
                 'data' => '' ]);
       }
       
    }
       }
   
   
   
       public function verifyAccount(Request $request){
              
            $email = $request->email;
            $password = $request->password;
        
             
            $validator = Validator::make($request->all(), [
                'email' => 'required|email',
                'password' => 'required'
            ]);
             
            if ($validator->fails()) {
               
                 return response()->json(['status' => 'failed','message' => $validator->messages()->first(), ]);
    
            }else{
       
           if(Auth::guard('tutor')->attempt(['email' => $request->email, 'password' => $request->password])){
            return response()->json([
                'status' => 'success',
                'message' => 'Login Succesfull', 
                'redirect_uri' => '/', 
                'data' => ''
            ]);

           }else{
            return response()->json([
                    'status' => 'failed',
                    'message' => 'Invalid Credentials',
                    'redirect_uri' => '/', 
                    'data' => '' 
            ]);

           }
        }
           
      }

      public function dashboard()
      {
        return view('tutor/dashboard/index');
      }
}
