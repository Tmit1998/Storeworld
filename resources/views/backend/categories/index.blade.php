@extends('backend.layouts.master')
@section('script')

    <script>

        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('#category').DataTable({
                processing: true,
                serverSide: true,
                ajax: '/categories/get-data',
                columns: [
                    { data: 'DT_RowIndex',searchable:false },
                    { data: 'name', name: 'category.name', searchable:true, },
                    { data: 'slug', name: 'category.slug' },
                    { data: 'parent_id', name: 'category.parent_id' },
                    { data: 'action', name: 'category.action' },
                ]    
            });

             $('#category').on('click', '.btn-delete', function (e) {
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
                            url: '/categories/destroy/' + id,
                            data: {id:id},
                            success: function (data) {
                                if(!res.error){
                                    $('#category').DataTable().ajax.reload();
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
                        <div class="btn btn-outline-warning">
                            <a href="{{route('categories.create')}}">Thêm mới</a>
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

