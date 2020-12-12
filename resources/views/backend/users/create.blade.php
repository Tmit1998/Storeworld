@extends('backend.layouts.master')
@section('content')
<!-- Content Header -->
<div class="head-title py-2">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Tạo người dùng</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Người dùng</a></li>
                    <li class="breadcrumb-item active">Tạo mới</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div>
</div>
    <!-- /.container-fluid -->

<!-- Content -->
<div class="container-fluid">
        <!-- Main row -->   
        <div class="row">
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tạo mới người dùng</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    
                    <form action="{{ route('users.store')}}" method="POST" role="form" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Tên người dùng">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Phone</label>
                                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone number">
                                @error('phone')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Mật khẩu</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Mật khẩu">
                                @error('password')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Xác nhận mật khẩu</label>
                                <input type="password" class="form-control" id="password-confirm" name="password_confirmation" placeholder="Mật khẩu">
                                @error('password_confirmation')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label>Phân quyền</label>
                                <select class="form-control" name="role" id="role" style="width: 100%;">
                                    <option value="0">Admin</option>
                                    <option value="1">Thành viên</option>
                                </select>

                                @error('role')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
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