@extends('user.dashboard.layouts.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Order Invoice</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Invoice</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <!-- <div class="callout callout-info">
                          <h5><i class="fas fa-info"></i> Note:</h5>
                          This page has been enhanced for printing. Click the print button at the bottom of the invoice to test.
                        </div> -->


                        <!-- Main content -->
                        <div class="invoice p-3 mb-3">
                            <!-- title row -->
                            <div class="row">
                                <div class="col-12">
                                    <h4>
                                        ECOMNEEDS
                                        <small class="float-right">Date:
                                            <mark>{{$date}}</mark>
                                        </small>
                                    </h4>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- info row -->
                            <div class="row invoice-info">
                                <div class="col-sm-4 invoice-col">
                                    From
                                    <address>
                                        <strong>ECOMNEEDS</strong><br>
                                        795 Folsom Ave, Suite 600<br>
                                        San Francisco, CA 94107<br>
                                        Phone: (804) 123-5432<br>
                                        Email: info@almasaeedstudio.com
                                    </address>
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 invoice-col">
                                    To
                                    <address>
                                        <strong>{{auth()->user()->name}}</strong><br>
                                        795 Folsom Ave, Suite 600<br>
                                        San Francisco, CA 94107<br>
                                        Phone: (555) 539-1037<br>
                                        Email: {{auth()->user()->email}}
                                    </address>
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 invoice-col">
                                    <b>Invoice #007612</b><br>
                                    <br>
                                    <b>Order ID:</b>
                                    <mark>{{$orderid}}</mark>
                                    <br>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->


                            <div class="row">
                                <!-- accepted payments column -->
                                <div class="col-6">
                                    <p class="lead">Payment Methods:</p>
                                    <img src="{{asset('public/images/visa.png')}}" alt="Visa">
                                    <img src="{{asset('public/images/mastercard.png')}}" alt="Mastercard">
                                    <img src="{{asset('public/images/american-express.png')}}" alt="American Express">
                                    <img src="{{asset('public/images/paypal2.png')}}" alt="Paypal">

                                    <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                                      Your payment is safe.
                                    </p>
                                </div>
                                <!-- /.col -->
                                <div class="col-6">


                                    <div class="table-responsive">
                                        <table class="table">
                                            <tr>
                                                <th style="width:50%">Subtotal:</th>
                                                <td>$@convert($ordersum)</td>
                                            </tr>
                                            <tr>
                                                <th>Total:</th>
                                                <td>
                                                    <mark>$@convert($ordersum)</mark>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->

                            <!-- this row will not appear when printing -->
                            <div class="row no-print">
                                <div class="col-12">
                                    <a href="invoice-print.html" target="_blank" class="btn btn-default"><i
                                            class="fas fa-print"></i> Print</a>
                                    <a type="button" href="{{route('payment')}}" class="btn btn-success float-right"><i
                                            class="far fa-credit-card"></i> Submit
                                        Payment
                                    </a>
                                    <button type="button" class="btn btn-primary float-right"
                                            style="margin-right: 5px;">
                                        <i class="fas fa-download"></i> Generate PDF
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- /.invoice -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


@endsection
