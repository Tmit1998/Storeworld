@extends('backend.layouts.master')
@section('script')

    <script>

        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('#trademark').DataTable({
                processing: true,
                serverSide: true,
                ajax: '/trademarks/get-data',
                columns: [
                    { data: 'DT_RowIndex',searchable:false },
                    { data: 'name', name: 'trademark.name', searchable:true, },
                    { data: 'status', name: 'trademark.status' },
                    { data: 'action', name: 'trademark.action' },
                ]
            });

             $('#trademark').on('click', '.btn-delete', function (e) {
                e.preventDefault();
                var id = $(this).data('id');
                Swal.fire({
                      title: 'BẠN CÓ CHẮC MUỐN XÓA?',
                      text: "Bạn sẽ không thể hoàn nguyên điều này!",
                      icon: 'CẢNH BÁO',
                      showCancelButton: true,
                      confirmButtonColor: '#3085d6',
                      cancelButtonColor: '#d33',
                      confirmButtonText: 'Yes'
                    }).then((result) => {
                      $.ajax({
                            type: 'DELETE',
                            url: '/trademarks/destroy/' + id,
                            data: {id:id},
                            success: function (data) {
                                if(!res.error){
                                    $('#trademark').DataTable().ajax.reload();
                                }
                            }         
                        });
                })
            
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
                <h1 class="m-0 text-dark">Danh sách thương hiệu</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Thương hiệu</li>
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
                        <div class="btn btn-outline-warning">
                            <a href="{{route('trademarks.create')}}">Thêm mới</a>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover" id="trademark">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên thương hiệu</th>
                                <th>Trạng thái</th>
                                <th>action</th>
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