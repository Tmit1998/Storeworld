<?php

namespace App\Http\Controllers\backend;

use Illuminate\Support\Facades\Cache;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index(Request $request)
    {
        //

      // $request->session()->put(['age' => '22']);  
      // $age = $request->session()->get('age');
      // echo $age.' '."Thanh cong";

      //   session(['name'=>'Thanh']);
      //   echo session('name');
        dd(1);
        return view('backend.dashboard');

        // $cockie = cockie('product_name')->cockie
        // $cookie->cookie('name_id', 'phone',1);
        // return $cookie;
            
        // $value = $request->cockie('item'); 

        // return response('oke')->cockie($cockie);
        // 
        // 
        // $categories = Category::get();
        // // Cache::put('home_Cate', $categories , 60);
        // // return 1;
        
        // $categories = Category::get('home_Cate');
        // dd($categories);

        // $categories = Cache::remmber('home_cate' , 10, function(){
        //     $categories = Category::get();
        //     return $categories;
        // });
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
