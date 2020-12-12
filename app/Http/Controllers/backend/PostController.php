<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Yajra\Datatables\Datatables;
use RealRashid\SweetAlert\Facades\Aler;
use App\Http\Requests\StorePostRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.posts.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        return view('backend.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        $post = new Post();
        $post->name = $request->get('name');
        $post->slug = Str::slug($request->get('name'));
        $post->content = $request->get('content');
        $post->content = $request->get('status');
        $post->user_id = 1;
        $file = $request->file('avatar');
        $path = Storage::disk('public')->putFileAs('uploads/thumbnail', $file, $file->getClientOriginalName());
        $post->avatar = $path;

        $save = $post->save();
        if ($save) {
            alert()->success('TẠO BÀI VIẾT', 'THÀNH CÔNG');
        } else {
            alert()->error('TẠO BÀI VIẾT', 'THẤT BẠI');
        }

        return redirect()->route('posts.index');
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
        
        return view('backend.posts.edit');
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
        $post = Post::find($id);
        $post->name = $request->get('name');
        $post->slug = Str::slug($request->get('name'));
        $post->content = $request->get('content');
        $post->trademark_id = $request->get('trademark_id');
        $post->user_id = 1;
        $save = $post->save();
        if ($save) {
            alert()->success('CẬP NHẬT BÀI VIẾT', 'THÀNH CÔNG');
        } else {
            alert()->error('CẬP NHẬT BÀI VIẾT', 'THẤT BẠI');
        }
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);  
        $post->delete();
        return response()->json([
            'error'=>false,
            'message'=>"Xóa thành công"
        ]);
    }

    public function getData(){
        $posts = Post::all();

        return DataTables::of($posts)
            ->addColumn('action', function($post){
                    $action = '<a href="'. route('posts.edit', $post->id) .'" class="btn btn-light waves-effect waves-light"> CHỈNH SỬA </a> <button class="btn btn-danger btn-delete" data-id="'.$post->id.'"> XÓA </button>';
                    return $action;
                })      
            

            ->addColumn('status', function($user){
                    
                $zero = 'XUẤT BẢN';
                $one = '';

                if($user->role == 0){
                   return $zero;
                }else{
                    return $one;
                }

            }) 

            ->addIndexColumn()
            ->rawColumns(['action','status'])
            ->make(true);
    }
}
