<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Yajra\Datatables\Datatables;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $categories = Category::get();
        // return view('backend.categories.index')->with(['categories' => $categories]);
        return view('backend.categories.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categories = new Category();
        $categories->name = $request->get('name');
        $categories->slug = Str::slug($request->get('name'));
        $categories->parent_id = $request->get('parent_id');
        $categories->depth = $request->get('depth');
        $categories->user_id = 1;
        $categories->save();
        return redirect()->route('categories.index');
    }   

    /**
     * Display the specified is_resource(var).
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
        $categories = Category::find($id);   
        return view('backend.categories.edit', ['categories' => $categories]);
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
        $category= Category::find($id); 
        $category->name = $request->get('name');
        $category->slug = Str::slug($request->get('name'));
        $category->parent_id = $request->get('parent_id');
        $category->depth = $request->get('depth'); 
        $category->save();
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categories = Category::find($id);  
        $categories->delete();
        return redirect()->route('categories.index');
    }

    public function getData(){
        $categories = Category::all();

        return DataTables::of($categories)
            // ->editColumn('avatar', function($user){
            //     if(empty($user->avatar)){
            //         return "Chưa có ảnh đại diện";
            //     }
            //     return '<img class="direct-chat-img" alt="message user image" src="'.asset('storage/image/user/'.$user>avatar).'">';
            // })

            ->editColumn('action',function($category){
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
