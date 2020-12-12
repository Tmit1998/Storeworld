@extends('backend.layouts.master')
@section('script')

    <script>



        $(document).ready(function() {
            $('#categorytable').DataTable({
                processing: true,
                serverSide: true,
                ajax: '/users/get-data',
                columns: [
                    { data: 'DT_RowIndex',searchable:false },
                    { data: 'name', name: 'user.name', searchable:true, },
                    { data: 'phone', name: 'user.phone' },
                    { data: 'email', name: 'user.email' },
                    { data: 'role', name: 'user.role' },
                    { data: 'action', name: 'user.action' },
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
                <h1 class="m-0 text-dark">Danh sách người dùng</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('users.index')}}">Người dùng</a></li>
                    <li class="breadcrumb-item active">Danh sách</li>
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

            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <a href="{{route('users.create')}}" class="btn btn-outline-warning">Thêm mới người dùng</a>
                        </h3>

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
                        <table class="table table-hover w-100" id="categorytable">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Vai trò</th>
                                <th>Chức năng</th>
                            </tr>
                            </thead>
                            <tbody>

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

