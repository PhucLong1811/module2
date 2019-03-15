<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Auth;

use Hash;


class registerController extends Controller
{
    public function Login()
    {

         return view('page.login.login');
    }

    public function postLogin(Request $request)
    {
        $this->validate($request,
            [
                'email'=>'required|email',
                'password' =>'required|min:6' 
            ]);
        if (Auth::attempt(['email'=>$request->email,'password'=>$request->password,'level'=>'1'])) {
           return redirect()->route('list.Register');
        }else {
            return view('page.login.login');
        }
    }

     public function Logout()
    {
        Auth::logout();
         return view('page.login.login');
    }

    public function createRegister()
    {
        return view('page.action_admin.register.create');
    }

    public function postRegister(Request $request)
    {
       $this->validate($request,
        [
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            're_password' => 'required|same:password',
            'name' => 'required'
        ]);
       $user = new User();
       $user->name = $request->name;
       $user->email = $request->email;
       $user->password = Hash::make($request->password);
       $user->phone = $request->phone;
       $user->address = $request->address;
       /* $user->gender = $request->gender;*/
       $user->level = $request->level;
       $user->DOB = $request->DOB;
       if ($request->hasFile('image')) 
       {
        $image = $request->file('image');
        $path = $image->store('images', 'public');
        $user->image = $path;
        }
    $user->save();
    return redirect()->back()->with('thanhcong','Tạo tài khoản thành công');
    }

    public function listRegister()
    {
        $user = User::all();
        return view('page.action_admin.register.list',compact('user'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editRegister($id)
    {
        $user = User::find($id);
        return view('page.action_admin.register.edit',compact('user'));
    }

    public function updateRegister(Request $request, $id)
    {
        $this->validate($request,
        [
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            're_password' => 'required|same:password',
            'name' => 'required'
        ]);
       $user = User::find($id);
       $user->name = $request->name;
       $user->email = $request->email;
       $user->password = Hash::make($request->password);
       $user->phone = $request->phone;
       $user->address = $request->address;
       /* $user->gender = $request->gender;*/
       $user->DOB = $request->DOB;
       if ($request->hasFile('image')) 
       {
        $image = $request->file('image');
        $path = $image->store('images', 'public');
        $user->image = $path;
        }
    $user->save();
    return redirect()->back()->with('thanhcong1','Cập nhật thành công');
    }

    public function deleteRegister($id)
    {
        $user = User::find($id);
        $user->delete();
         return redirect()->route('list.Register');
    }
}
