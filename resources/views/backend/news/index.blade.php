@extends('backend.layouts.master')
@section('content')

<!-- Content Header -->
<div class="head-title py-2">
    <div class="head-title py-2">
        <div class="container-fluid">
            <div class="row mb-2 pt-4">
                <div class="col-12 col-sm-6">
                    <h1 class="m-0 text-dark">Danh sách bài viết</h1>
                </div><!-- /.col -->
                <div class="col-12 col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">news</a></li>
                        <li class="breadcrumb-item active">Danh sách</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div>
    </div>
</div>

<!-- Content -->
<div class="container-fluid">
        <!-- Main row -->
        <div class="row">

            <div class="col-12">
                <div class="card">
                    <div class="card-header">   
                        <h3 class="card-title">Danh sách bài viết</h3>

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
                                <th>thumbnail</th>
                                <th>Tên bài viết</th>
                                <th>Tác giả</th>
                                <th>Chuyên mục</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    <img class="direct-chat-img" src="../dist/img/user1-128x128.jpg" alt="message user image">
                                </td>
                                <td>Hướng dẫn</td>
                                <td>John Doe</td>
                                <td>Hướng dẫn sử dụng</td>
                                <td>Đã xuất bản</td>
                                <td>
                                    <a href="#" class="btn btn-default">view</a>
                                    <a href="#" class="btn btn-default">edit</a>
                                    <a href="#" class="btn btn-default">delete</a>
                                </td>
                            </tr>
                        
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