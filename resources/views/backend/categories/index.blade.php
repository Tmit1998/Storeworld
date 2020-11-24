@extends('backend.layouts.master')
@section('content')
<!-- Content Header -->
<div class="head-title py-2">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Danh sách sản phẩm</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Sản phẩm</a></li>
                    <li class="breadcrumb-item active">Danh sách</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div>
</div><!-- /.container-fluid -->
<!-- Content -->
<div class="container-fluid">
        <!-- Main row -->
        <div class="row">

            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <!-- <h3 class="card-title">Sản phẩm mới nhập</h3> -->
                        <div class="btn btn-outline-warning">
                            <a href="{{route('categories.create')}}">Thêm mới danh mục</a>
                        </div>
                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên danh mục</th>
                                <th>parent_id</th>
                                <th>depth</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach( $categories as $category)
                            <tr>
                                
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->parent_id }}</td>
                                <td>{{ $category->depth }}</td>
                                <td>
                                    <a href="#" class="btn btn-default">View</a>
                                    <button class="btn btn-default">Edit</button>
                                    <a href="#" class="btn btn-default">Delete</a>
                                </td>
                            </tr>
                            @endforeach()

                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
@endsection