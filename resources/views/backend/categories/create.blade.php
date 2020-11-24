@extends('backend.layouts.master')

@section('content')
<!-- Content Header -->
<div class="head-title py-2">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Tạo danh mục sản phẩm</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('categories.index') }}">Danh mục sản phẩm</a></li>
                    <li class="breadcrumb-item active">Tạo danh mục sản phẩm</li>
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
                <!-- general form elements -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tạo Danh mục phẩm</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="{{ route('categories.store')}}" method="POST">
                        {{ csrf_field() }}
                        
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên danh mục</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Tên danh mục">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">parent_id</label>
                                <input type="text" class="form-control" id="parent_id" name="parent_id" placeholder="parent_id">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">depth</label>
                                <input type="text" class="form-control" id="depth" name="depth" placeholder="depth">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Mô tả sản phẩm</label>
                                <textarea class="textarea" name="content" placeholder="Place some text here"
                                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <a href="{{ route('categories.index') }}" class="btn btn-default">Huỷ bỏ</a>
                            <button type="submit" class="btn btn-sucess">Tạo mới</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
@endsection