<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Image;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
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

        $user = new User();
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->phone = $request->get('phone');
        $user->role = $request->get('role');
        $user->password = $request->get('password');
        
        $save = $user->save();
        if ($save) {
            alert()->success('TẠO NGƯỜI DÙNG', 'THÀNH CÔNG');
        } else {
            alert()->error('TẠO NGƯỜI DÙNG', 'THẤT BẠI');
        }

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
        $user->role = $request->get('role');
        $user->password = $request->get('password');
        $save = $user->save();
        if ($save) {
            alert()->success('CẬP NGƯỜI DÙNG', 'THÀNH CÔNG');
        } else {
            alert()->error('CẬP NGƯỜI DÙNG', 'THẤT BẠI');
        }
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
        return response()->json([
            'error'=>false,
            'message'=>"Xóa thành công"
        ]);
    }


    public function getData(){
        $users = User::all();

        return DataTables::of($users)
            ->addColumn('action', function($user){
                    $action = '<a href="'. route('users.edit', $user->id) .'" class="btn btn-light waves-effect waves-light"> CHỈNH SỬA </a> <button class="btn btn-danger btn-delete" data-id="'.$user->id.'"> XÓA </button>';
                    return $action;
                })

            ->addColumn('role', function($user){
                    
                $zero = 'Admin';
                $one = 'Thành viên';

                if($user->role == 0){
                   return $zero;
                }else{
                    return $one;
                }

            })      
           
            ->addIndexColumn()
            ->rawColumns(['action','role'])
            ->make(true);
    }
}
