<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;
use App\Models\Product;
use App\Models\Trademark;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreUserRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Gate;
use Yajra\Datatables\Datatables;
use RealRashid\SweetAlert\Facades\Aler;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('backend.products.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::get();
        $trademark = Trademark::get();
        return view('backend.products.create')->with([
            'categories' => $categories,
            'trademark' => $trademark,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->get('name');
        $product->slug = Str::slug($request->get('name'));
        $product->origin_price = $request->get('origin_price');
        $product->sale_price = $request->get('sale_price');
        $product->content = $request->get('content');
        $product->description = $request->get('description');
        $product->trademark_id = $request->get('trademark_id');
        $product->category_id = $request->get('category_id');
        $product->status = $request->get('status');
        $product->user_id = 1;
        $file = $request->file('avatar');
        $path = Storage::disk('public')->putFileAs('uploads/thumbnail', $file, $file->getClientOriginalName());
        $product->avatar = $path;
        $save = $product->save();
        if ($save) {
            alert()->success('TẠO SẢN PHẨM', 'THÀNH CÔNG');
        } else {
            alert()->error('TẠO SẢN PHẨM', 'THẤT BẠI');
        }

        return redirect()->route('products.index');
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
        // $users = User::find(1);
        // $Products = Product::find($id);

        // Gate::define('update', function($products){
        //     if ($users->id == $products->user_id) {
        //         dd('có quyền');
        //     }else{
        //         dd('không quyền');
        //     }
        // });

        // Gate::allows('update', function($products){
        //     if ($users->id == $products->user_id) {
        //         dd('có');
        //     }else{
        //          dd('không');
        //     }
        // });

        $category = Category::find($id);
        $categories = Category::get();
        return view('backend.products.edit')->with([
            'categories' => $categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreProductRequest $request, $id)
    {
        //

        $products = Product::find($id);
        $products->name = $request->get('name');
        $products->slug = Str::slug($request->get('name'));
        $products->origin_price = $request->get('origin_price');
        $products->sale_price = $request->get('sale_price');
        $products->content = $request->get('content');
        $products->description = $request->get('description');
        $products->trademark_id = $request->get('trademark_id');
        $products->category_id = $request->get('category_id');
        $products->status = $request->get('status');
        $save = $product->save();
        $save = $product->save();
        if ($save) {
            alert()->success('CẬP NHẬT SẢN PHẨM', 'THÀNH CÔNG');
        } else {
            alert()->error('CẬP NHẬT SẢN PHẨM', 'THẤT BẠI');
        }
            
        return redirect()->route('products.index');

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

        $products = Product::find($id);
        $products->delete();
        return response()->json([
            'error'=>false,
            'message'=>"Xóa thành công"
        ]);
    }


    public function getData(){
        $products = Product::all();

        return DataTables::of($products)
            ->addColumn('action', function($product){
                    $action = '<a href="'. route('productS.edit', $product->id) .'" class="btn btn-light waves-effect waves-light"> CHỈNH SỬA </a> <button class="btn btn-danger btn-delete" data-id="'.$product->id.'"> XÓA </button>';
                    return $action;
                })  

            ->addColumn('category_id', function($product){
                    if($product->category_id == 0){
                        return $category->category_id->name;
                    }else {
                        // return '-';
                    }
                    // $categoryname = '';
                    // return $categoryname;
                }) 

            ->addColumn('status', function($product){
                    
                $zero = 'BẢN NHÁP';
                $one = 'XUẤT BẢN';

                if($user->role == 0){
                   return $zero;
                }else{
                    return $one;
                }

            })        
           
            ->addIndexColumn()
            ->rawColumns(['action','status','categoryname'])
            ->make(true);
    }
}
