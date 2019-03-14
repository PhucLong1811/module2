<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Auth;

use Hash;

class loginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createLogin()
    {
        return view('page.action_admin.login.create');
    }

    public function postLogin(Request $request)
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


public function show($id)
{
        //
}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
