<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Trademark;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Aler;
use App\Http\Requests\StoreTrademarkRequest;

class TrademarkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.trademarks.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $trademark = Trademark::get();
        // return view('backend.trademarks.create')->with([
        //     'trademark' => $trademark
        // ]);
        return view('backend.trademarks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTrademarkRequest $request)
    {
        $trademark = new Trademark();
        $trademark->name = $request->get('name');
        $trademark->slug = Str::slug($request->get('name'));
        $trademark->status = $request->get('status');
        $trademark->user_id = 1;
        $save = $trademark->save();

        if ($save) {
            alert()->success('TẠO THƯƠNG HIỆU', 'THÀNH CÔNG');
        } else {
            alert()->error('TẠO THƯƠNG HIỆU', 'THẤT BẠI');
        }

        return redirect()->route('trademarks.index');
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
        $trademark = Trademark::get();
        return view('backend.trademarks.edit')->with([
            'trademark' => $trademark
        ]);
        // return view('backend.trademarks.edit');
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

        $trademark = Trademark::find($id);
        $trademark->name = $request->get('name');
        $trademark->slug = Str::slug($request->get('name'));
        $trademark->status = $request->get('status');
        $save = $trademark->save();
        if ($save) {
            alert()->success('CẬP NHẬT THƯƠNG HIỆU', 'THÀNH CÔNG');
        } else {
            alert()->error('CẬP NHẬT THƯƠNG HIỆU', 'THẤT BẠI');
        }

        return redirect()->route('trademarks.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $trademark = Trademark::find($id);
        $trademark->delete();
        return response()->json([
            'error'=>false,
            'message'=>"Xóa thành công"
        ]);

    }

    public function getData(){
        $trademarks = Trademark::all();

        return DataTables::of($trademarks)
                ->addColumn('action', function($trademark){
                    $action = '<a href="'. route('trademarks.edit', $trademark->id) .'" class="btn btn-light waves-effect waves-light"> CHỈNH SỬA </a> <button class="btn btn-danger btn-delete" data-id="'.$trademark->id.'"> XÓA </button>';
                    return $action;
                })  

                ->addColumn('status', function($trademark){
                    
                    $zero = 'Hoạt động';
                    $one = 'Tạm ngưng';

                    if($trademark->status == 0){
                       return $zero;
                    }else{
                        return $one;
                    }

                }) 
       
           
            ->addIndexColumn()
            ->rawColumns(['action','value'])
            ->make(true);
    }
}
