@extends('multiauth::layouts.app')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Order Detail</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Order Detail</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">order # <mark>{{$order->order_id}}</mark></h3>


            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
                        <div class="row">
                            <div class="col-12 col-sm-4">
                                <div class="info-box bg-light">
                                    <div class="info-box-content">
                                        <span class="info-box-text text-center text-muted">Order Ammount</span>
                                        <span class="info-box-number text-center text-muted mb-0">${{$ordersum}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="info-box bg-light">
                                    <div class="info-box-content">
                                        <span class="info-box-text text-center text-muted">Total Images</span>
                                        <span class="info-box-number text-center text-muted mb-0">{{$imagescount}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="info-box bg-light">
                                    <div class="info-box-content">
                                        <span class="info-box-text text-center text-muted">Order Date</span>

                                        <span class="info-box-number text-center text-muted mb-0"><mark>{{date('d-m-Y',strtotime($order->created_at))}}</mark> <span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">



                                <div class="card card-primary collapsed-card">
                                    <div class="card-header">
                                        <h3 class="card-title">Instructions</h3>

                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                                    class="fas fa-plus"></i>
                                            </button>
                                        </div>
                                        <!-- /.card-tools -->
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        @foreach(json_decode($order->instruction) as $ins)
                                        <label>picture {{$loop->iteration}} </label> <br>
                                        {{$ins}}
                                        <br><br>
                                        <hr>
                                        @endforeach
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->

{{--                                <div class="card card-primary collapsed-card">--}}
{{--                                    <div class="card-header">--}}
{{--                                        <h3 class="card-title">Clipping </h3>--}}

{{--                                        <div class="card-tools">--}}
{{--                                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i--}}
{{--                                                    class="fas fa-plus"></i>--}}
{{--                                            </button>--}}
{{--                                        </div>--}}
{{--                                        <!-- /.card-tools -->--}}
{{--                                    </div>--}}
{{--                                    <!-- /.card-header -->--}}
{{--                                    <div class="card-body">--}}
{{--                                        @if($order->clipping)--}}
{{--                                            @foreach(json_decode($order->clipping) as $clipping)--}}
{{--                                            <label>picture {{$loop->iteration}} </label> <br>--}}
{{--                                             $@convert($clipping)--}}
{{--                                            <br><br>--}}
{{--                                            <hr>--}}
{{--                                            @endforeach--}}
{{--                                        @else--}}
{{--                                        <p><p>--}}
{{--                                        @endif--}}
{{--                                    </div>--}}
{{--                                    <!-- /.card-body -->--}}
{{--                                </div>--}}
                                <!-- /.card -->


{{--                                <div class="card card-primary collapsed-card">--}}
{{--                                    <div class="card-header">--}}
{{--                                        <h3 class="card-title">Masking</h3>--}}

{{--                                        <div class="card-tools">--}}
{{--                                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i--}}
{{--                                                    class="fas fa-plus"></i>--}}
{{--                                            </button>--}}
{{--                                        </div>--}}
{{--                                        <!-- /.card-tools -->--}}
{{--                                    </div>--}}
{{--                                    <!-- /.card-header -->--}}
{{--                                    <div class="card-body">--}}
{{--                                        @if($order->masking)--}}
{{--                                            @foreach(json_decode($order->masking) as $masking)--}}
{{--                                            <label>picture {{$loop->iteration}} </label> <br>--}}
{{--                                            $@convert($masking)--}}
{{--                                            <br><br>--}}
{{--                                            <hr>--}}
{{--                                            @endforeach--}}
{{--                                        @else--}}

{{--                                         <p></p>--}}

{{--                                        @endif--}}
{{--                                    </div>--}}
{{--                                    <!-- /.card-body -->--}}
{{--                                </div>--}}
{{--                                <!-- /.card -->--}}


                                <div class="card card-primary collapsed-card">
                                    <div class="card-header">
                                        <h3 class="card-title">Return Format </h3>

                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                                    class="fas fa-plus"></i>
                                            </button>
                                        </div>
                                        <!-- /.card-tools -->
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        @if($order->return_format)
                                            @foreach(json_decode($order->return_format) as $return_format)
                                            <label>picture {{$loop->iteration}} </label> <br>
                                            {{$return_format}}
                                            <br><br>
                                            <hr>
                                            @endforeach
                                        @else

                                        <p></p>

                                        @endif
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->


                                <div class="card card-primary collapsed-card">
                                    <div class="card-header">
                                        <h3 class="card-title">Images ({{$imagescount}})</h3>

                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                                    class="fas fa-plus"></i>
                                            </button>
                                        </div>
                                        <!-- /.card-tools -->
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        @foreach(json_decode($order->images) as $images)

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label><mark>picture {{$loop->iteration}} </mark></label> <br>
                                                <?php
                                                $file_name = explode("/",$images);

                                                ?>
                                                <a href="{{route('admin.downloadfile',['session'=>$file_name[0],'filename'=>$file_name[1]])}}"
                                                    class="btn btn-info download-images" ><i class="fas fa-cloud-download-alt fa-fw "></i>
                                                    Download</a>
                                            </div>
                                            <div class="col-md-6">
                                                <img src="{{asset('public/orders/orderid_'.$images)}}"
                                                    class="img-responsive" style="width:250px;height:250px;">

                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                        @endforeach
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->

                                <div class="card card-primary collapsed-card">
                                    <div class="card-header">
                                        <h3 class="card-title">Reference Images ({{$reference_images}})</h3>

                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                                    class="fas fa-plus"></i>
                                            </button>
                                        </div>
                                        <!-- /.card-tools -->
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        @if(!empty(json_decode($order->reference_images,true)))


                                            @foreach(json_decode($order->reference_images) as $reference_images)

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label><mark>picture {{$loop->iteration}} </mark></label> <br>
                                                    <?php
                                                $file_name = explode("/",$reference_images);

                                                ?>
                                                    <a href="{{route('admin.downloadreferencefile',['session'=>$file_name[0],'foldername'=>$file_name[1],'filename'=>$file_name[2]])}}"
                                                        class="btn btn-info"><i class="fas fa-cloud-download-alt fa-fw"></i>
                                                        Download</a>
                                                </div>
                                                <div class="col-md-6">
                                                    <img src="{{asset('public/orders/orderid_'.$reference_images)}}"
                                                        class="img-responsive" style="width:250px;height:250px;">

                                                </div>
                                            </div>
                                            @endforeach

                                        @else
                                            <p>No reference Image</p>

                                        @endif

                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->

                                <div class="card card-primary collapsed-card">
                                    <div class="card-header">
                                        <h3 class="card-title">Comments</h3>

                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                                    class="fas fa-plus"></i>
                                            </button>
                                        </div>
                                        <!-- /.card-tools -->
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">


                                        <div class="row">
                                            {{$order->comments}}
                                        </div>

                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->






                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
                        <h3 class="text-primary"><i class="fas fa-paint-brush"></i> AdminLTE v3</h3>
                        <p class="text-muted">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt
                            tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi,
                            qui irure terr.</p>
                        <br>
                        <div class="text-muted">
                            <p class="text-sm"><b>Client Name</b>
                                <b class="d-block"><mark>{{$client->name}}</b></mark>
                            </p>
                            <p class="text-sm"><b>Client Email</b>
                                <b class="d-block"><mark>{{$client->email}}</mark></b>
                            </p>
                        </div>

                        <h5 class="mt-5 text-muted">Project files</h5>
                        <ul class="list-unstyled">
                            <li>
                                <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i>
                                    Functional-requirements.docx</a>
                            </li>
                            <li>
                                <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-pdf"></i>
                                    UAT.pdf</a>
                            </li>
                            <li>
                                <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-envelope"></i>
                                    Email-from-flatbal.mln</a>
                            </li>
                            <li>
                                <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-image "></i>
                                    Logo.png</a>
                            </li>
                            <li>
                                <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i>
                                    Contract-10_12_2014.docx</a>
                            </li>
                        </ul>
                        <div class="text-center mt-5 mb-3">
                            <a href="#" class="btn btn-sm btn-primary">Add files</a>
                            <a href="#" class="btn btn-sm btn-warning">Report contact</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection
