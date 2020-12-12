@extends('backend.layouts.master')

@section('content')

    <!-- Content Header -->
    <div class="head-title py-2">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Cập nhật thương hiệu sản phẩm</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Cập nhật thương hiệu</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div>
    </div><!-- /.container-fluid -->
    <!-- Content -->

    <div class="container-fluid">
        <!-- Main row -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <!-- form start -->
                    <form role="form" action="{{ route('trademarks.store','$trademark->id')}}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên thương hiệu</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{$trademark->name}}">
                                @error('name')    
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror()
                            </div>


                            <div class="form-group">
                                <label>Trạng thái</label>
                                <select name="status" class="form-control select2" style="width: 100%;">
                                    <option value="{{ $trademark->status }}" @if($trademark->status == 0) selected @endif>HOẠT ĐỘNG</option>
                                    <option value="{{ $trademark->status }}" @if($trademark->status == 1) selected @endif>TẠM NGỪNG</option>
                                </select>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <a href="{{ route('trademarks.index') }}" class="btn btn-default">Huỷ bỏ</a>
                            <button type="submit" class="btn btn-sucess">Cập nhật</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
@endsection