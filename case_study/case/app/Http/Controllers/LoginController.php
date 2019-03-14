<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
use Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('login.login');
    }

    public function postlogin(Request $request)
    {
        $this->validate($request,
            [
                'email'=>'required|email',
                'password' =>'required|min:6' 
            ]);
        $user = array('email'=>$request->email,'password'=>$request->password);
        if (Auth::attempt($user)) {
            return view('login.login');
        }else {
            return view('login.login');
        }
    }

    public function register()
    {

        return view('login.register');
    }

    public function postregister(Request $request)
    {
         $this->validate($request,
            [
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:6',
                're_password' => 'required|same:password',
                'fullname' => 'required'
            ]);
        $user = new User();
        $user->full_name = $request->fullname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->save();
        return redirect()->back()->with('thanhcong','Tạo tài khoản thành công');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('Trang-Chu');
    }

    public function show()
    {
        return view('login.user');
    }
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
