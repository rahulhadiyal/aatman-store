<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Session;
use DB; 
use Carbon\Carbon;
use App\Models\Admin; 
use Mail;
use Hash;
use Illuminate\Support\Str;

class ForgotPasswordController extends Controller
{
    /*
     *
     * Write code on Method
     *
     * @return response()
    */
    public function showForgetPasswordForm()
    {
        if (Auth::check()) 
        {
            return redirect()->route('admin.dashboard');
        }
        return view('auth.forgetPassword');
    }
  
    /*
     *
     * Write code on Method
     *
     * @return response()
    */
    public function submitForgetPasswordForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:admins',
        ]);   
        $email = $request->email;
        $token = Str::random(64);

        DB::table('password_resets')->insert([
            'email' => $request->email, 
            'token' => $token, 
            'created_at' => Carbon::now()
        ]);

        Mail::send('mail.forgetPassword', ['token' => $token , 'email' => $email], function($message) use($request){
            $message->to($request->email);
            $message->subject('Reset Password');
        });

        return back()->with('message', 'We have e-mailed your password reset link!');
    }
    /*
     *
     * Write code on Method
     *
     * @return response()
    */
    public function showResetPasswordForm($token, $email) 
    { 
        if (Auth::check()) 
        {
            return redirect()->route('admin.dashboard');
        }
        return view('auth.resetPassword', ['token' => $token, 'email' => $email]);
    }
  
    /*
     *
     * Write code on Method
     *
     * @return response()
    */
    public function submitResetPasswordForm(Request $request)
    {   

        $request->validate([
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'required'
        ]);

        $updatePassword = DB::table('password_resets')
                            ->where([
                                'email' => $request->email, 
                                'token' => $request->token
                            ]);

        if(!$updatePassword)
        {
            return back()->withInput()->with('error', 'Invalid token!');
        }
        $admin = Admin::where('email', $request->email)
                    ->update(['password' => Hash::make($request->password)]);
 
        DB::table('password_resets')->where(['email'=> $request->email])->delete();
  
        return redirect()->route('admin.login')->with('message', 'Your password has been changed!');
    }
}
