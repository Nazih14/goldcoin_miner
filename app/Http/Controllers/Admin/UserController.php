<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Show data profile User.
     * @return \Illuminate\Http\Response
    */
    
    public function profile()
    {
        $user = User::where('id', Auth::user()->id)->first();
        return view('admin.user.profile', compact('user'));
    }

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
     * Update the specified resource user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'gender' => 'required',
            'birthday' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'email' => 'required',
            'id' => 'required',
        ]);
        $remove = ['_method', '_token'];
        
        $user = $request->input();

        $user['birthday'] = date("Y-m-d", strtotime($request->birthday));
        
        if ($request->input('password')!=null) {
            $request->validate([
                'password' => 'required|confirmed|min:8',
            ]);
            $user['password'] =  Hash::make($request->input('password'));
        }else{
            array_merge($remove, ['password']);    
        }

        array_push($remove, 'password_confirmation');

        foreach($remove as $key) {
            unset($user[$key]);
        }

        User::where("id", $user['id'])->update($user);
        
        return redirect()->back();
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
