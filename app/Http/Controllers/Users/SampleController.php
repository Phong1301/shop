<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use Session;
use Illuminate\Support\Facades\Auth;
use App\User;

class SampleController extends Controller
{
    function index(){
        return view('user.login');
    }

    function registration(){
        return view('user.registration');
    }

    function validate_registration(Request $request){
        
        $request->validate([
            'name'      =>  'required',
            'email'     =>  'required|email|unique:users',
            'password'  =>  'required|min:6'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $res = $user->save();

        if($res){
            return redirect('login')->with('success', 'Registration Completed');
        }else{
            return redirect('registration')->with('error', 'Something Wrong');
        }
    }

    function validate_login(Request $request){
        
        $request->validate([
            'email'     =>  'required|email',
            'password'  =>  'required|min:6'
        ]);

        $user = User::where('email', '=', $request->email)->first();

        if($user){
            if(Hash::check($request->password, $user->password)){
                $request->session()->put('loginId', $user->id);
                return redirect('dashboard')->with('success', 'Login Success');
            }else{
                return redirect('login')->with('error', 'Password not matches');
            }
        }else{
            return redirect('login')->with('error', 'This Email is not registered');
        }
       
    }

    function dashboard(){

        if(Session::has('loginId')){
            return view('user.dashboard');
        }

    }

    function logout(){

        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('/');
        }

    }
}
