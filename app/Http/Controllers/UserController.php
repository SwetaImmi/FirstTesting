<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Register;
use Auth;
use Hash;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;

class UserController extends Controller
{


    public function __construct()
    {

        // $this->middleware('auth')
        // ->except([
        //     'logout', '/table'
        // ]);
    }

    public function index()
    {
        return view('static.login');
    }

    public function show()
    {
        return view('static.signIn');
    }

    public function create(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        // $user->password = $request->password;
        $user->role = $request->role;
        $user->password = bcrypt($user['password']);
        // echo "<pre>"; print_r($user); die('test');
        $user->save();
        return redirect('/login');
    }


    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/product_table')->withSuccess('You have logged In successfully!');
        } else {
        
            return redirect('/login')->withError('Invalid Email address or Password');
        }
    }

    public function data_delete($id)
    {
        $user = User::find($id)->delete();
        return redirect()->back();

        // return view('Crud.home');
    }

    public function edit(Request $request, $id)
    {

        $user = User::findOrFail($id);
        return view('static.edit_Signin', ['user' => $user]);
    }

    public function update_data(Request $request, $id)
    {

        $user = User::findOrFail($id);
        $user->id = $request->id;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;

        $user->save();
        // return $user;
        return redirect('/table')->withSuccess('success', 'You have Successfully loggedin');
    }

    public function login()
    {

        return view('Crud.login');
    }


   


    // public function logout(Request $request)
    // {
    //     Auth::logout();
    //     $request->session()->invalidate();
    //     $request->session()->regenerateToken();
    //     return redirect()->route('login')
    //         ->withSuccess('You have logged out successfully!');
    // }



        // public function table_data()
    // {

    //     $user = User::all();
    //     // if (Auth::check()) {
    //     //     return view('Crud.home', ['user' => $user]);
    //     // } else {
    //     //     return 0;
    //     // }

    //     if (Auth::check()) {
    //         if (Auth::user()->role == 'Admin') { // if the current role is Administrator
    //             // return view('Crud.home', ['user' => $user]);
    //             return view('static.index', ['user' => $user]);
    //             // return 1;
    //         }elseif(Auth::user()->role == 'User'){ // if the current role is User
    //             // return view('Crud.home', ['user' => $user]);
    //             return view('static.index', ['user' => $user]);
    //         }else{
    //             return view('static.index', ['user' => $user]); 
    //         }
    //     }
       
    // }

}
