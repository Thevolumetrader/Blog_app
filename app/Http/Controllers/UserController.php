<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    //
    public function getLogin(){
        return view('frontend.pages.login');
    }
    public function postLogin(Request $request){

        $cred = $request->only('email', 'password');

        if(Auth::guard('web')->attempt($cred)){

            return redirect()->route('homepage')->with('success','login successfully');
        }else{

            return  redirect()->route('user.getlogin')->with('error', 'invlaid credentials');
        }
    }
    public function getRegister(){
        return view('frontend.pages.register');
    }

    public function postRegister(Request $request){
        // dd($request->all());
        // $request->validate([
        //     'name' => 'required|max:255',
        //     'email' => 'required|unique:users|email|max:255',
        //     'phone_number' => 'required',
        //     // 'password' => 'required|between:8,255|confirmed',
        //     // 'password_confirmation' => 'required'
        // ]);

        $user = new User;

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect()->route('user.getlogin')->with('success', 'successfully Registered');
    }

    public function logout()
{
    Auth::logout();

    return redirect()->route('homepage')->with('success', 'logout successfully'); // Redirect to the home page or any other desired location
}
}
