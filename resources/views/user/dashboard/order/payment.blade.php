@extends('user.dashboard.layouts.app')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Order Payment</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Payment</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Quick Example</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <div class='col-md-12 error form-group hide' >
                                <div class='alert-danger alert'>Please correct the errors and try
                                    again.</div>
                            </div>
                    <form role="form" action="{{ route('stripe.post') }}" method="post" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form" class="require-validation"   data-cc-on-file="false">
                        {{csrf_field()}}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Card Name</label>
                                <input type="text" class="form-control"  name="cardname" value="{{old('cardname')}}" id="exampleInputEmail1"
                                    placeholder="Enter Name" required>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Number</label>
                                <input type="number" class="form-control  card-number "  name="number" value="{{old('number')}}" id="exampleInputEmail1"
                                    placeholder="Enter Card Number" required>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label class='control-label'>CVC</label>
                                        <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311'
                                            size='4' type='text' required name="cvc" value="{{old('cvc')}}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class='control-label'>Expiration Month</label> <input
                                            class='form-control card-expiry-month' placeholder='MM' size='2'
                                            type='text' required>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class='control-label'>Expiration Year</label> <input
                                            class='form-control card-expiry-year' placeholder='YYYY' size='4'
                                            type='text' required>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>



                        </div>
                        <!-- /.card-body -->


                    </form>
                </div>
                <!-- /.card -->

            </div>

        </div>
    </div>

    @endsection
