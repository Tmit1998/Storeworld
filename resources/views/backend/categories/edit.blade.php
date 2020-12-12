@extends('backend.layouts.master')

@section('content')
<!-- Content Header -->
<div class="head-title py-2">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Chỉnh sửa danh mục sản phẩm</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('categories.index') }}">Danh mục sản phẩm</a></li>
                    <li class="breadcrumb-item active">Chỉnh sửa danh mục sản phẩm</li>
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
                        <h3 class="card-title">Chỉnh sửa danh mục</h3>
                    </div>
                    <!-- /.card-header -->

                    <!-- form start -->
                    <form role="form" action="{{ route('categories.update',$category->id)}}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên danh mục</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{$category->name}}">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Danh mục cha</label>
                                <select class="form-control select2" style="width: 100%;" name="parent_id">
                                    <option value="0">Trống</option>
                                    @foreach($categories as $value)
                                        <option value="{{ $value->id }}" @if($value->id == $category->parent_id) selected @endif>{{ $value->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <a href="{{ route('categories.index') }}" class="btn btn-default">Huỷ bỏ</a>
                            <button type="submit" class="btn btn-sucess">Cập nhật</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        
    </div>
@endsection