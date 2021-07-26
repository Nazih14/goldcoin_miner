<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Storage;
use Image;


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
            array_push($remove, 'password');    
        }
        array_push($remove, 'password_confirmation');
        
        foreach($remove as $key) {
            unset($user[$key]);
        }
        
        if ($request->hasFile('photo')) {
            $slugName = Str::slug($user['name']);
            $user['photo'] = $this->uploadImage($request->file('photo'), 'users', $slugName);
        }

        if ($request->hasFile('cover')) {
            $slugName = Str::slug($user['name']);
            $user['cover_photo'] = $this->uploadImage($request->file('cover'), 'cover-users', $slugName);
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
    
    /**
    * save image to storage.
    *
    * @param  request()->file $requestImage, jenisImage, name
    * @return \Illuminate\Http\Response
    */
    public function uploadImage($requestImage, $folder, $slugName)
    {
        // dd($requestImage);
        $fileName   =  $folder.'-'.$slugName.'.'.$requestImage->getClientOriginalExtension();
        
        $image    = Image::make($requestImage);

        $image->resize(350, null, function ($constraint) {
            $constraint->aspectRatio();
        });

        Storage::disk('local')->makeDirectory('public/'.$folder);

        $image->save(storage_path('app/public/'.$folder.'/'.$fileName));

        return 'storage/'.$folder.'/'.$fileName;
    }
}
