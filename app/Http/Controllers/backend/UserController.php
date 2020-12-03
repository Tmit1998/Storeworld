<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreProductRequest;
use Illuminate\Support\Facades\Storage;
use Yajra\Datatables\Datatables;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // làm việc với storage
        //Cách 1: put file
        // Storage::put('Demo2.txt', 'Contents');
        // Storage::disk('public')->put('Demos.txt', 'Contents');
        // Storage::disk('local')->put('Demos.txt', 'Contents');
        //Cách 2: lấy file
        // $content = Storage::disk('public')->get('Demos.txt');
        // dd($content);
        //Cách 3: Kiểm tra file
        // $exists = Storage::disk('local')->exists('Demo2.txt');
        // dd($exists);
        //Cách 4: Down file
        // return Storage::download('Demo2.txt');
        // Cách 5: Url file
        // $url = Storage::url('Demo2.txt');
        // dd($url);

        // Storage::delete('Demo2.txt');



        // $user = User::get();
        return view('backend.users.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



        // if ($request->hasFile('image')){
        //     $file = $request->file('image');
        //     // $path = Storage::disk('public')->putFileAs('images', $request->file('image'));
        //     $path = Storage::disk('public')->putFileAs('images', $file, $file->getClientOriginalName());
        //     $url = Storage::url($path);
        //     dd($url);
        //     dd($path);
        //     // dd($file);
        // }else{
        //     dd('khong co file');
        // }

        // Thêm disk vào database image

        $user = new User();
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->phone = $request->get('phone');
        $user->avatar = $request->get('avatar');
        $user->role = $request->get('role');
        $user->password = $request->get('password');
        $user->save();

        // $images = new Image();

        // $images->name = $file->getClientOriginalName();
        // $images->path = $path;
        // $images->product_id = ;

        // return view('backend.users.index');
        return redirect()->route('users.index');
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
        $user = User::find($id);
        return view('backend.users.edit')->with(['user' => $user]);
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
        $user = User::find($id);

        $user->name = $request->get('name');
        $user->phone = $request->get('phone');
        $user->email = $request->get('email');
        // $users->role = $request->get('role');
        $role = $request->get('role');
        $user->role = 0;
        $user->password = $request->get('password');
        $user->save();
        return redirect()->route('users.index');

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
        $user = User::find($id);
        $user->delete();
    }


    public function getData(){
        $users = User::all();

        return DataTables::of($users)
            // ->editColumn('avatar', function($user){
            //     if(empty($user->avatar)){
            //         return "Chưa có ảnh đại diện";
            //     }
            //     return '<img class="direct-chat-img" alt="message user image" src="'.asset('storage/image/user/'.$user>avatar).'">';
            // })

            ->editColumn('action',function($user){
                return 'a href="" class="btn btn-outline-warning">
                            <i class="nav-icon fas fa-pencil mr-1"></i>  Chỉnh sửa
                        </a>
                        <a href="" class="btn btn-outline-primary">
                            <i class="nav-icon fas fa-eye mr-1"></i> View
                        </a>
                        <a href="" class="btn btn-outline-danger">
                            <i class="nav-icon fas fa-trash mr-1"></i> Xóa
                        </a>';
            })
           

            ->addIndexColumn()
            ->rawColumns(['action'])
            ->make(true);
    }
}
