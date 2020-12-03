@extends('backend.layouts.master')
@section('script')

    <script>



        $(document).ready(function() {
            $('#category').DataTable({
                dom: 'lifrtp',
                processing: true,
                serverSide: true,
                ajax: '/categories/get-data',
                columns: [
                    { data: 'DT_RowIndex',searchable:false },
                    { data: 'name', name: 'categories.name', searchable:true, },
                    { data: 'slug', name: 'categories.slug' },
                    { data: 'parent_id', name: 'categories.parent_id' },
                    { data: 'action', name: 'categories.action' },
                ]
            });
        });



    </script>       


@endsection
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
                        <table class="table table-hover" id="category">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên danh mục</th>
                                <th>Slug</th>
                                <th>Danh mục cha</th>
                                <th>Chức năng</th>
                            </tr>
                            </thead>
                            <tbody>

                            {{-- @foreach( $categories as $category)
                            <tr>
                                
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->slug }}</td>
                                <td>{{ $category->parent_id }}</td>
                                <td>
                                    <a href="{{ route('category.edit', $categories->id) }}" class="btn btn-outline-warning">
                                        <i class="nav-icon fas fa-pencil mr-1"></i>  Chỉnh sửa
                                    </a>
                                    <a href="{{ route('category.edit', $category->id) }}" class="btn btn-outline-primary">
                                        <i class="nav-icon fas fa-eye mr-1"></i> View
                                    </a>
                                    <a href="{{ route('category.destroy', $category->id) }}" class="btn btn-outline-danger">
                                        <i class="nav-icon fas fa-trash mr-1"></i> Xóa
                                    </a>
                                </td>
                            </tr>
                            @endforeach() --}}

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