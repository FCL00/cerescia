<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Requests\UserRequest;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    public function logout() {
        auth()->logout();
        return redirect('/')->with("success", "You have successfully logout");
    }
    public function login(Request $request){
        $incomingData = $request->validate([
            "username" => "required",
            "password" => "required",
        ]);
        if(auth()->attempt(['username' => $incomingData["username"], 'password' => $incomingData["password"]  ])){
            $request->session()->regenerate();
            return redirect('/store')->with("success", "You have successfully login");
        } else {
            return redirect('/login')->with("failure", "Incorrect username or password");
        }
    }
    public function signUp(UserRequest $request){
        $incomingData = $request->validated();

        $user = User::create($incomingData);
        auth()->login($user);

        return view("storePage");
    }
    public function showSignUp(){
        dd('here');
        return view("signUpPage");
    }
    public function showLoginPage(){
        return view("loginPage");
    }
    public function showHomePage(){
        return view("homePage");
    }

}
