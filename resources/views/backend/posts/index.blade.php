@extends('backend.layouts.master')

@section('script')

    <script>


        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('#post').DataTable({
                processing: true,
                serverSide: true,
                ajax: '/posts/get-data',
                columns: [
                    { data: 'DT_RowIndex',searchable:false },
                    { data: 'name', name: 'posts.name', searchable:true, },
                    { data: 'slug', name: 'posts.slug' },
                    { data: 'status', name: 'posts.status' },
                    { data: 'action', name: 'posts.action' },
                ]    
            });

             $('#post').on('click', '.btn-delete', function (e) {
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
                            url: '/posts/destroy/' + id,
                            data: {id:id},
                            success: function (data) {
                                if(!res.error){
                                    $('#post').DataTable().ajax.reload();
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
    <div class="head-title py-2">
        <div class="container-fluid">
            <div class="row mb-2 pt-4">
                <div class="col-12 col-sm-6">
                    <h1 class="m-0 text-dark">Danh sách bài viết</h1>
                </div><!-- /.col -->
                <div class="col-12 col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
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
        
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover" id="post">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên bài viết</th>
                                <th>Slug</th>
                                <th>Trạng thái</th>
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