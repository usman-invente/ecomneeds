@extends('user.dashboard.layouts.app')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">

                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Preview Images</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content" id="upload_img">
        <div class="container-fluid">

            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{route('createorder')}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        @foreach($files as $key => $file)
                        <div class="row" style="margin-bottom:40px;">

                            <div class="col-md-6">
                                <img src="{{asset('public/orders/orderid'.'_'.session('order_id').'/'.$file)}}"
                                    style="width:300px;height:300px;margin-bottom:50px;"><br><br>
                                <div style="text-align: center">

                                    <a data-file="{{$file}}" class="text-center btn btn-info removefile"
                                        style="display: inline-block;color:white">Remove File</a>
                                </div>
                                <br><br>

                            </div>

                            <div class="col-md-6">
                                <textarea class='form-control' name='instruction[]' style='width:100%'
                                    placeholder="what you want with this image " required></textarea>
                                <br>

                                <label>Select Level</label><br>
                                <input type='radio' required value='2.00' name='level[{{$key}}]'> Simple ($2.00
                                per
                                image)<br>
                                <input type='radio' required value='5.00' name='level[{{$key}}]'> Medium ($5.00 per
                                image)<br>
                                <input type='radio' required value='10.00' name='level[{{$key}}]'> Complex
                                ($10.00 per
                                image)<br>
                                <input type='radio' class='usman' data-name='show' required value='10.00'
                                    name='level[{{$key}}]'>
                                Extreme ($10.00 per image)<br>
                                <br>

                                <label>Clipping</label><br>
                                <select name="clipping[]" class='form-control' >";
                                    <option value=''>---</option>
                                    <option value='2.00'>Simple ($2.00/image)</option>
                                    <option value='5.00'>Medium ($5.00/image)</option>
                                    <option value='10.00'>Complex ($10.00/image)</option>
                                    <option value='10.00'>Extreme ($10.00/image)</option>
                                </select>
                                <br>

                                <label>Masking</label>

                                <select name='masking[]' class='form-control' >";
                                    <option value=''>---</option>
                                    <option value='2.00'>Simple ($2.00/image)</option>
                                    <option value='5.00'>Medium ($5.00/image)</option>
                                    <option value='10.00'>Complex ($10.00/image)</option>
                                    <option value='10.00'>Extreme ($10.00/image)</option>
                                </select>
                                <br>

                                <label>Shadow</label>

                                <select name='shadow[]' class='form-control' >";
                                    <option value=''>---</option>
                                    <option value='2.00'>Natural Shadow ($2.00/image)</option>
                                    <option value='5.00'>Drop Shadow ($5.00/image)</option>
                                    <option value='10.00'>Mirror shadow ($10.00/image)</option>
                                </select>
                                <br>

                                <label>Montage</label>

                                <select name='montage[]' class='form-control' >";
                                    <option value=''>---</option>
                                    <option value='2.00'>mannequin removal / adding two objects ($2.00/image)</option>

                                </select>
                                <br>

                                <label>Resize</label>

                                <select name='resize[]' class='form-control' >";
                                    <option value=''>---</option>
                                    <option value='2.00'>Auto crop/with border ($2.00/image)</option>

                                </select>
                                <br>

                                <label>Use For</label>

                                <select  class='form-control usefor' required>";
                                    <option value=''>--</option>
                                    <option  data-id="{{$key}}" value='web'>Web</option>
                                    <option  data-id="{{$key}}" value='print'>Print</option>
                                </select>
                                <br>

                                <div class="for{{$key}}"></div>

                                <br>
                                <label>Psd with Layer</label><br>
                                <input type='checkbox' name='psdwithlayer[{{$key}}]'> price + 100% (double
                                price)


                            </div>

                        </div>
                        @endforeach

                        <div class="row">

                            <div class="col-md-12">

                                <textarea class="form-control" placeholder="Comments" name="comments"></textarea>

                            </div>

                        </div>
                        <br>
                        <div class="row">

                            <div class="col-md-6" style="margin-bottom:20px;">
                                <label>Referance image (optional) </label>
                                <input type="file" name="reference_file[]" class="form-control" multiple>


                            </div>

                            <div class="col-md-6">

                                <p><b>
                                        <mark>You can upload multiiple refrence files</mark>
                                    </b></p>


                            </div>

                            <div class="col-md-6">

                            </div>

                        </div>
                        <br>
                        <button class="btn btn-info" type="submit">Create Order</button>

                    </form>
                </div>


            </div>

        </div>
</div>




</div>
<!-- /.container-fluid -->
</section>

<section class="content" style="display:none;" id="ins_div">
    <form method="POST" action="{{route('createorder')}}">
        {{csrf_field()}}
        <div id="preview"></div>
    </form>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->


@endsection
