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
                    <li class="breadcrumb-item active">Cập nhật</li>
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
                        <h3 class="card-title">Cập nhật người dùng</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('users.update', $user->id) }}" method="POST" role="form">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Phone</label>
                                <input type="tel" class="form-control" id="phone" name="phone" value="{{$user->phone}}">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{$user->email}}">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Mật khẩu</label>
                                <input type="password" class="form-control" id="password" name="password" value="{{$user->password}}">
                            </div>

                            <div class="form-group">
                                <label>Vai Trò</label>
                                <select class="form-control select2" name="role" style="width: 100%;">
                                    <option value="{{$user->role}}" @if($user->role == 0) selected @endif>
                                        Admin
                                    </option>
                                    {{-- <option value="1" @if($user->role == 1) selected @endif>
                                        Quản lý
                                    </option> --}}
                                    <option value="{{$user->role}}"  @if($user->role == 1) selected @endif>
                                        Thành viên
                                    </option> 
                                </select>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <a href="{{ route('users.index') }}" class="btn btn-default">Huỷ bỏ</a>
                            <button type="submit" class="btn btn-sucess">Cập nhật</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->    
@endsection