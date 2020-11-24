<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreUserRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Gate;

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
        $products = Product::get();
        return view('backend.products.index')->with(['products' => $products]);
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
        return view('backend.products.create')->with([
            'categories' => $categories
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
        //

        if ($request->hasFile('images')){
            $files = $request->file('images');
            

            foreach ($files as $file) {
                $name = $file->getClientOriginalName();
                $file->move('Product', $name);
            }

            // $path = Storage::disk('public')->putFileAs('images', $request->file('image'));
            // $path = Storage::disk('public')->putFileAs('product', $file, $file->getClientOriginalName());
            // $url = Storage::url($path);
            // dd($url);
            // dd($path);

            dd($file);
        }else{
            dd('khong co file');
        }


        $products = new Product();
        $products->name = $request->get('name');
        $products->slug = $request->get('name');
        $products->origin_price = $request->get('origin_price');
        $products->sale_price = $request->get('sale_price');
        $products->content = $request->get('content');
        $products->description = $request->get('description');
        $products->trademark_id = $request->get('trademark_id');
        $products->category_id = $request->get('category_id');
        $products->status = $request->get('status');
        // $products->user_id = Auth::user()->id;
        $products->save();

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
        $users = User::find(1);
        $Products = Product::find($id);

        Gate::define('update', function($products){
            if ($users->id == $products->user_id) {
                dd('có quyền');
            }else{
                dd('không quyền');
            }
        });

        // Gate::allows('update', function($products){
        //     if ($users->id == $products->user_id) {
        //         dd('có');
        //     }else{
        //          dd('không');
        //     }
        // });

        // $categories = Category::find($id);
        // return view('backend.products.edit')->with([
        //     'categories' => $categories
        // ]);
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
        $products->slug = $request->get('name');
        $products->origin_price = $request->get('origin_price');
        $products->sale_price = $request->get('sale_price');
        $products->content = $request->get('content');
        $products->description = $request->get('description');
        $products->trademark_id = $request->get('trademark_id');
        $products->category_id = $request->get('category_id');
        $products->status = $request->get('status');
        // $products->user_id = Auth::user()->id;
        $products->save();

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
        return redirect()->route('products.index');
    }
}
