@extends('user.dashboard.layouts.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Profile</h1>

                    </div>

                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Profile</li>
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
                        @if(session('msg'))
                            <p class="alert alert-success">{{session('msg')}}</p>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="card">

                            <!-- /.card-header -->
                            <div class="card-body">

                                <form role="form" method="post" action="{{route('updateprofile')}}"
                                      enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" name="email" class="form-control"
                                                   id="exampleInputEmail1"
                                                   value="{{Auth::check()?Auth::user()->email:''}}"
                                                   placeholder="Enter email">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" name="password" class="form-control"
                                                   id="exampleInputPassword1" placeholder="Password" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Profile Image</label>
                                            <input type="file" name="file" class="form-control">
                                        </div>

                                        <button type="submit" class="btn btn-primary">Update</button>

                                    </div>
                                    <!-- /.card-body -->
                                </form>
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
