@extends('backend.layouts.master')
@section('content')
<!-- Content Header -->
<div class="head-title py-2">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Thư viện ảnh</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Thư viện ảnh</li>
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
                        <h3 class="card-title">Thư viện ảnh</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <div class="row">
                            @foreach( $image as $images)
                            <div class="col-12 col-sm-4 col-md-3 col-lg-2 col-xl-2">
                                <img src="/public/thumbnail/.'$images->name'.">
                            </div>
                            @endforeach
                        </div>
                        <div class="row">
                            @foreach( $image as $images)
                            <div class="col-12 col-sm-4 col-md-3 col-lg-2 col-xl-2">
                                <img src="/public/images/.'$images->name'.">
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
@endsection