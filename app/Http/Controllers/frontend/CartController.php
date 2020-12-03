<?php

namespace App\Http\Controllers\frontend;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $item = Cart::content();
        // return view('frontend.products.cart')->width('list' => [$lists]);
        return view('frontend.cart.cart')->with(['item' => $item]);



        // $image = 
    }


    public function add($id){
        // $product = Product::find($id);
        // Cart::add($product->id, $product->name, 1, $product->sale_price, 0);
        $item = Cart::add([
          ['id' => '2', 'name' => 'Product 1', 'weight' => 1, 'qty' => 1, 'price' => 10.00],
          ['id' => '3', 'name' => 'Product 2', 'weight' => 1, 'qty' => 1, 'price' => 10.00],
        ]);
        return redirect()->route('cart.cart');
        // dd($item);
    }


    public function remove($cart_id){
        Cart::remove($cart_id);
        // dd($cart_id);
        return redirect()->route('cart.cart');
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
