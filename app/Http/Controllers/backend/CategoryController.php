<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Yajra\Datatables\Datatables;
use RealRashid\SweetAlert\Facades\Aler;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        return view('backend.categories.index');


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {



        $category = Category::get();
        return view('backend.categories.create')->with([
            'category' => $category
        ]);


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {

        $parent = Category::find($request->get('parent_id'));
        $category = new Category();
        $category->name = $request->get('name');
        $category->slug = Str::slug($request->get('name'));
        $category->parent_id = $request->get('parent_id');

        if (isset($parent)) {
            $category->depth = $parent->depth + 1;
        } else {
            $category->depth = 1;
        }

        $save = $category->save();

        if ($save) {
            alert()->success('TẠO DANH MỤC', 'THÀNH CÔNG');
        } else {
            alert()->error('TẠO DANH MỤC', 'THẤT BẠI');
        }

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




        $category = Category::find($id);
        $categories = Category::get();
        return view('backend.categories.edit')->with([
            'categories' => $categories,
            'category' => $category
        ]);



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
        $category = Category::find($id);  
        $category->delete();
        return response()->json([
            'error'=>false,
            'message'=>"Xóa thành công"
        ]);


    }

    public function getData(){
        $categories = Category::all();

        return DataTables::of($categories)
            ->addColumn('action', function($category){
                    $action = '<a href="'. route('categories.edit', $category->id) .'" class="btn btn-light waves-effect waves-light"> CHỈNH SỬA </a> <button class="btn btn-danger btn-delete" data-id="'.$category->id.'"> XÓA </button>';
                    return $action;
                })  

            ->addColumn('parent', function($category){
                if($category->parent_id == 0){
                    return $category->parent_id;
                }else {
                    return '-';
                }
            })       
           
            ->addIndexColumn()
            ->rawColumns(['action','parent'])
            ->make(true);
    }

}
