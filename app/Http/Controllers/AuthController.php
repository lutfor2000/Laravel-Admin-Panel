<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Mail\ForgotPasswordMail;
use App\Models\User;
use Carbon\Carbon;
use Auth;
use DB;
use Hash;
use Mail;


class AuthController extends Controller
{

//===================Registration Page Start=================================>
function Registration(){
    return view('auth.registration');
}
 
function RegistrationPost(Request $request){
        $validator = Validator::make($request->all(),[
            "name" => "required",
            "email" => "required|unique:users",
            "password" => "required|min:6",
            "confirm_password" => "required_with:password|same:password|min:6",   
        ]);

        if ($validator->passes()) {

        User::insert([
            "name"=> $request->name,
            "email"=> $request->email,
            "password"=>Hash::make($request->password),
            "is_role"=> $request->is_role,
            "remember_token"=>Str::random(50),
            'created_at' => Carbon::now(),   
        ]);
            session()->flash('registration_message','Registration Successfull!');
            return response()->json([
            'status' => true,
            'errors' => []
            ]);
        }else{
            return response()->json([
            'status' => false,
            'errors' => $validator->errors()
            ]);
        }
      
      
           
}
//===================Registration Page End=================================>

//===================Login Page Start=================================>
function LoginPage(){
    return view('auth.login');
}
function LoginPost(Request $request){
    if(Auth::attempt(['email' => $request->email, 'password' => $request->password], true)){
        if (Auth::User()->is_role == '0')
        {
           return redirect()->route('userdesgboard');
        }
        else if(Auth::User()->is_role == '1')
        {
            return redirect()->route('admindesgboard');
        }
        else if(Auth::User()->is_role == '2')
        {
            return redirect()->route('superadmindesgboard');
        }
        else
        {
            return redirect('login')->with('login_error','Not Available Email, Plase Check');
        }
    }else{
         return redirect()->back()->with('login_error','Please enter your correct email and password!');
    }
}
//===================Login Page End=================================>

//===================Forgot Password  Start=================================>
function ForgotPassword(){
    return view('auth.forgot_password');
}

function ForgotPasswordPost(Request $request){
    $count = User::where('email', '=', $request->email)->count();
    if($count > 0){
       
       $user = User::where('email', '=' , $request->email)->first();
       $user->remember_token = Str::random(50);
       $user->save();
       Mail::to($user->email)->send(new ForgotPasswordMail($user));
       return redirect()->to(route('forgotpassword'))->with('email_message','We have send an email to reset password');
    }
    else
    {
       return redirect()->back()->with('email_message','Email not found in the system.'); 
    }
    
}

function NewForgotPassword(){

   return view('auth.new_password');
}
//===================Forgot Password  Start=================================>


//===================Logout Page Start=================================>
function Logout(){ 
    Auth::logout();
    return redirect()->route('loginpage');
}
//===================Logout Page End=================================>

//===================Login Page Start=================================>
//===================Login Page End=================================>


}
