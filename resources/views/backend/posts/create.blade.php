@extends('backend.layouts.master')
@section('content')
<!-- Content Header -->
<div class="head-title py-2">
<div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Tạo bài viết</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="#">Bài viết</a></li>
                    <li class="breadcrumb-item active">Tạo bài viết</li>
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
                        <h3 class="card-title">Tạo bài viết</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="{{ route('posts.store')}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên bài viết</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Tên bài viết">
                            </div>
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="exampleInputEmail1">Mô tả bài viết</label>
                                <textarea class="textarea" name="content" placeholder="Place some text here"
                                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">Hình ảnh bài viết</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="avatar" id="avatar">
                                        <label class="custom-file-label" for="exampleInputFile">Chọn hình ảnh</la>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="">ĐĂNG</span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Trạng thái</label>
                                <select name="status" class="form-control select2" style="width: 100%;">
                                    <option value="0">BẢN NHÁP</option>
                                    <option value="1">XUẤT BẢN</option>
                                </select>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <a href="{{ route('posts.index') }}" class="btn btn-default">Huỷ bỏ</a>
                            <button type="submit" class="btn btn-sucess">Tạo mới</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
@endsection