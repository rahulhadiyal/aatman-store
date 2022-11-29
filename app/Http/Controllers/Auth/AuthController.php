<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Session;
use App\Models\Admin;
use Hash;

class AuthController extends Controller
{
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function register()
    {
        return view('auth.register');
    }
      
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:5|confirmed',
        ]);     
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect()->route('admin.dashboard')->withSuccess('Great! You have Successfully loggedin');
    }
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function create(array $data)
    {
      return Admin::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }

    /**
     * Auth login
     *
     * @return response()
     */
    public function index(Request $request)
    {
        if (Auth::check()) 
        {
            return redirect()->route('admin.dashboard');
        }
        return view('auth.login');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/admin/dashboard')
                        ->withSuccess('You have Successfully loggedin');
        }
  
        return redirect()->route('admin.login')->withSuccess('Oppes! You have entered invalid credentials');
    }
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function logout() {
        Auth::logout();
  
        return redirect()->route('admin.login');
    }

}
