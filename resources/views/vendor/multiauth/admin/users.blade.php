@extends('multiauth::layouts.app')
@section('datatable-css')
<!-- DataTables -->
<link rel="stylesheet" href="{{asset('public/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('public/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css" rel="stylesheet">
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Users List</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Users</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                        <div class="card">

                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Ip Address</th>
                                            <th>Created At</th>
                                            <th>Options</th>

                                        </tr>
                                    </thead>
                                    <!-- <tfoot>
                                        <tr>
                                            <th>Rendering engine</th>
                                            <th>Browser</th>
                                            <th>Platform(s)</th>
                                            <th>Engine version</th>
                                            <th>CSS grade</th>
                                        </tr>
                                    </tfoot> -->
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection


@section('datables-js')
<!-- DataTables -->
<script src="{{asset('public/admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('public/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('public/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('public/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.js" ></script>
<script>
    $(document).ready(function () {
        $('#example1').DataTable({
            "processing": true,
            "serverSide": true,
            "responsive" :  true,
            "ajax":{
                     "url": "{{ route('admin.getusers') }}",
                     "dataType": "json",
                     "type": "POST",
                     "data":{ _token: "{{csrf_token()}}"}
                   },
            "columns": [
                { "data": "name" },
                { "data": "email" },
                { "data": "ip_address" },
                { "data": "created_at" },
                 {
                'orderable': false,
                'searchable': false,
                'data': null,
                'render': function (data, type, row, meta) {
                    return '<i style="color:red"  data-id="'+data.id+'"class="fa fa-trash delete"></i>';
                }
        }



            ]

        });
    });
</script>

 <script>

        $(document).on('click', '.delete', function (e) {
            e.preventDefault();
            var id = $(this).data('id');
            var parent = $(this).parent().parent();


            swal({
                    title: "Are you sure?",
                    text: "",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes, Delete!",
                    cancelButtonText: "No, cancel please!",
                    closeOnConfirm: false,
                    closeOnCancel: false
                },
                function(isConfirm){
                    if (isConfirm) {
                        //console.log("sdsd");

                        $.ajax({
                            type: "POST",
                            url: "{{route('admin.user.delete')}}",
                            data: {'_token': "{{csrf_token()}}",id: id},
                            success: function (data) {
                                // alert(data);
                                swal("Updated", "", "success");
                                parent.fadeOut('slow', function() {$(this).remove();});
                            }
                        });	// submitting the form when user press yes
                    } else {
                        swal("Cancelled", "Your record  is safe :)", "info");
                    }
                });

        });
    </script>
@endsection
