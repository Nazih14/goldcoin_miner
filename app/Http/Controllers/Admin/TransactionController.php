<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Transaction;
use Illuminate\Support\Str;
use Storage;
use Image;

class TransactionController extends Controller
{
    /**
     * List transaction
     * @member
     * @admin
     * @return \Illuminate\Http\Response
     * @request search
     */
    public function index(Request $request)
    {
        $search = $request->get('search');
        $user = request()->user();

        // dd($search);
        $data = Transaction::select('transactions.*')->where('user_id', $user->id)->paginate(10); 
        if (is_null($search)) {
    
            if ($user->role=='admin') 
                $data = Transaction::select('transactions.*', 'users.name', 'users.id as user_id', 'users.role')->leftJoin('users', 'users.id', '=', 'transactions.user_id')->paginate(10);        
    
        }else {
            $data =  Transaction::select('transactions.*', 'users.name', 'users.id as user_id', 'users.role')
            ->leftJoin('users', 'users.id', '=', 'transactions.user_id')
            ->where(function ($query) use ($search){
                $query->orWhere('subject','like', '%'.$search.'%');
                $query->orWhere('name','like', '%'.$search.'%');
                $query->orWhere('time','like', '%'.$search.'%');
                $query->orWhere('transactions.status',$search);
            })->paginate(10);
        }
        
        return view('admin.transactions.index', compact('data'));
    }

    /**
     * Show the form for creating a new transactions members
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $type='create';
        $users= User::select('id', 'name', 'email')->where('role','member')->get();
        return view('admin.transactions.form', compact('type', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'subject' => 'required',
            'user_id' => 'required',
            'price' => 'required',
            'time' => 'required',
            'status' => 'required',
        ]);

        $this->save('create', $request);

        return redirect()->back()->with('success', 'Success save data transactions');

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
     * Show the form for editing the specified transaction.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $type = 'edit';
        $users= User::select('id', 'name', 'email')->where('role','member')->get();
        $data = Transaction::findOrFail($id);
        return view('admin.transactions.form', compact('type', 'users', 'data'));      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'subject' => 'required',
            'user_id' => 'required',
            'price' => 'required',
            'time' => 'required',
            'status' => 'required',
        ]);

        $this->save('edit', $request);

        return redirect()->back()->with('success', 'Success update data transactions');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Transaction::destroy($id);
        return redirect()->back()->with('success', 'Success delete data transactions');
    }

    private function save($type, $request)
    {

        $remove = ['_method', '_token'];
        $dataInput = $request->input();
        
        $dataInput['time'] = date("Y-m-d H:i:s", strtotime($request->time));
   
        foreach($remove as $key) {
            unset($dataInput[$key]);
        }
        if ($request->hasFile('image')) {
            $slugName = Str::slug($dataInput['subject']);
            $dataInput['image'] = $this->uploadImage($request->file('image'), 'transactions', $slugName);
        }

        if ($type=='create') {
            Transaction::create($dataInput);
        }else{
            Transaction::where("id", $dataInput['id'])->update($dataInput);
        }
        return true;
    }

    public function uploadImage($requestImage, $folder, $slugName)
    {
        // dd($requestImage);
        $fileName   =  $folder.'-'.rand(0, 10000).'.'.$requestImage->getClientOriginalExtension();
        
        $image    = Image::make($requestImage);

        $image->resize(350, null, function ($constraint) {
            $constraint->aspectRatio();
        });

        Storage::disk('local')->makeDirectory('public/'.$folder);

        $image->save(storage_path('app/public/'.$folder.'/'.$fileName));

        return 'storage/'.$folder.'/'.$fileName;
    }
}
