<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view("auth.login");
    }

    public function login(Request $request)
    {
        return redirect('/');

        $data = $request->validate([
            "email" => ["required", "email", "string"],
            "password" => ["required"]
        ]);

        if(auth("web")->attempt($data)) {
            return redirect(route("/"));
        }

        return redirect(route("login"))->withErrors(["email" => "Пользователь не найден, либо данные введены не правильно"]);
    }

    public function logout()
    {
        auth("web")->logout();

        return redirect(route("login"));
    }

    public function showRegisterForm(Request $request)
    {
        return view("auth.register");
    }

    public function showForgotForm()
    {
        return view("auth.forgot");
    }

    //  public function userData(){
    //        $data = User::orderBy('id')->take(1)->get();
    //        return view('/', [
    //            'User' => $data,
    //
    //            ]);
    //    }


    public function register(Request $request)
    {

        $data = $request->validate([
            "name" => ["required", "string"],
            "surname" => ["required"],
            "checkFlorUL" => ["required"],
            "user_iin" => ["required", "unique:users,user_iin","numeric", "digits:12"],
            "user_location" => ["required", "string"],
            "email" => ["required", "email", "string", "unique:users,email"],
            "password" => ["required", "confirmed", "min:6"]
        ]);


        $user = User::create([
            "name" => $data["name"],
            "surname" => $data["surname"],
            "user_iin" => $data["user_iin"],
            "checkFlorUL" => $data["checkFlorUL"],
            "user_location" => $data["user_location"],
            "email" => $data["email"],
            "password" => bcrypt($data["password"])
        ]);

        if($user) {
            //event(new Registered($user));
            auth("web")->login($user);
        }

        return redirect('/');
    }

    public function showProfile()
    {
        return view("profile");
    }

}
