<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Session;


class UserController extends Controller
{
    public function index () {
        return view('users');
    }

    public function sign_up () {
        return view('sign-up');
    }


    public function registration (Request $request) {
        $this -> validate($request, [
            'first_name' => 'required',
            'last_name'  => 'required',
            'email'      => 'required|unique:users',
            'password'   => 'required',
            'image'      => 'required',
        ]);

        if ($request -> has('image')) {
            $file = $request -> image;
            $file_name = time(). '_' .$file -> getClientOriginalName();
            $file -> move(public_path('profile'), $file_name);
        }
        if ($request -> password == $request -> confirmPassword) {
            User::create([
                'first_name' => $request -> first_name,
                'last_name' => $request -> last_name,
                'email'=> $request -> email,
                'password' =>  Hash::make($request -> password),
                'image' => $file_name,
            ]);
            return redirect() -> route('sign-up') -> with('success', 'The account has been created');
        }else {
            return view('sign-up') -> with('failed', 'password is not correct');
        }
    }

    public function loginUser (Request $request) {
        $request -> validate([
            'email'      => 'required',
            'password'   => 'required',
        ]);
        $user = User::where('email', '=', $request -> email) -> first();
        if ($user) {
            if (Hash::check($request -> password, $user -> password)) {
                $request -> session() -> put('loginId', $user -> id);
                if ($user -> Role == "1") {
                    return redirect() -> route('admin-dashbord');
                }else {
                    return redirect() -> route('home');
                }
            }else {
                return redirect() -> route('login') -> with('failed', 'The Password is incorrect');
            }
        }else{
            return redirect() -> route('login') -> with('failed', 'The email is incorrect');
        }
    }

    public function ProfilePage (Request $request) {
        $data = array();
        if (Session::has('loginId')) {
            $data = User::where('id', '=', Session::get('loginId')) -> first();
        }
        return view('admin-dashbord', compact('data'));
    }

    public function logout () {
        if (Session::has('loginId')) {
            Session::pull('loginId');
        }
        return redirect() -> route('login');
    }
}
