<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;
use App\Models\User;


class ForgotPasswordController extends Controller
{


//===================Forgot Password Page Start=================================>

// function PostForgotPassword(Request $request){
//     $count = User::where('email', '=', $request->email)->count();
//     if($count > 0){
//        $token =Str::random(64);
//        DB::table('password_reset_tokens')->insert([
//           'email' => $request->email,
//           'token' => $token,
//           'created_at' => Carbon::now(), 
//        ]);
//        Mail::send("emails.forgot_password", ['token' => $token], function($message) use ($request){
//           $message->to($request->email);
//           $message->subject('Reset Password');
//        });
//        return redirect()->to(route('forgotpassword'))->with('email_message','We have send an email to reset password');
//     }
//     else
//     {
//        return redirect()->back()->with('email_message','Email not found in the system.'); 
//     }
// }

//===================Forgot Password Page End=================================>
    
}
