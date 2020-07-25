@extends('layouts.app')
@section('content')
<!-- /Topmenu-4 block -->
<section class="w3l-bread-crumbs">
        <div class="inner-image">
               <div class="wrapper">
       <div class="beread-titles">
           <h3>Ecommerce</h3>
                   <ul class="breadcrumbs-custom-path">
                       <li><a href="index.html">Home <span class="fa fa-angle-double-right" aria-hidden="true"></span></a></li>
                       <li class="active">Ecommerce</li>
                   </ul>
               </div>
               </div>
           </div>
       </section>   
   <section class="w3l-ecommerce-pages">
       <div class="ecommerce-section">
           <div class="wrapper">
               <div class="main-contant">
                   <div class="product-list">
                       <div class="product-card">
                           <a href="{{route('shop-single')}}">
                           <span class="tag">
                               <span class="fa fa-shopping-cart" aria-hidden="true"></span>
                           </span>
                           <h2>Kodak Camera</h2>
                           <h4>Saepe debitis autem minima</h4>
                           <figure>
                               <img src="{{asset('public/images/e1.jpg')}}" alt="product" class="img-responsive" />
                           </figure>
                           <span class="price">
                               $3400
                           </span>
                        </a>
                       </div>
                       <div class="product-card">
                            <a href="{{route('shop-single')}}">
                            <span class="tag">
                                <span class="fa fa-shopping-cart" aria-hidden="true"></span>
                            </span>
                            <h2>Fujifilm Camera</h2>
                            <h4>Saepe debitis autem minima</h4>
                            <figure>
                                <img src="{{asset('public/images/e2.jpg')}}" alt="product" class="img-responsive" />
                            </figure>
                            <span class="price">
                                $2000
                            </span>
                        </a>
                        </div>
                        <div class="product-card">
                                <a href="{{route('shop-single')}}">
                                <span class="tag">
                                    <span class="fa fa-shopping-cart" aria-hidden="true"></span>
                                </span>
                                <h2>Colorfull Camera</h2>
                                <h4>Saepe debitis autem minima</h4>
                                <figure>
                                    <img src="{{asset('public/images/e3.jpg')}}" alt="product" class="img-responsive" />
                                </figure>
                                <span class="price">
                                    $5000
                                </span>
                            </a>
                            </div>
                            <div class="product-card">
                                    <a href="{{route('shop-single')}}">
                                    <span class="tag">
                                        <span class="fa fa-shopping-cart" aria-hidden="true"></span>
                                    </span>
                                    <h2>Philips Camera</h2>
                                    <h4>Saepe debitis autem minima</h4>
                                    <figure>
                                        <img src="{{asset('public/images/e4.jpg')}}" alt="product" class="img-responsive" />
                                    </figure>
                                    <span class="price">
                                        $4400
                                    </span>
                                </a>
                                </div>
                        <div class="product-card">
                                <a href="{{route('shop-single')}}">
                            <span class="tag">
                                <span class="fa fa-shopping-cart" aria-hidden="true"></span>
                            </span>
                            <h2>Panasonic Camera</h2>
                            <h4>Saepe debitis autem minima</h4>
                            <figure>
                                <img src="{{asset('public/images/e2.jpg')}}" alt="product" class="img-responsive" />
                            </figure>
                            <span class="price">
                                $6300
                            </span>
                        </a>
                        </div>
                        <div class="product-card">
                                <a href="{{route('shop-single')}}">
                             <span class="tag">
                                 <span class="fa fa-shopping-cart" aria-hidden="true"></span>
                             </span>
                             <h2>Olympus Camera</h2>
                             <h4>Saepe debitis autem minima</h4>
                             <figure>
                                 <img src="{{asset('public/images/e3.jpg')}}" alt="product" class="img-responsive" />
                             </figure>
                             <span class="price">
                                 $2200
                             </span>
                            </a>
                         </div>
                         <div class="product-card">
                                <a href="{{route('shop-single')}}">
                                 <span class="tag">
                                     <span class="fa fa-shopping-cart" aria-hidden="true"></span>
                                 </span>
                                 <h2>Kodak Camera</h2>
                                 <h4>Saepe debitis autem minima</h4>
                                 <figure>
                                     <img src="{{asset('public/images/e1.jpg')}}" alt="product" class="img-responsive" />
                                 </figure>
                                 <span class="price">
                                     $7400
                                 </span>
                                </a>
                             </div>
                             <div class="product-card">

                                 <a href="{{route('shop-single')}}">
                                     <span class="tag">
                                         <span class="fa fa-shopping-cart" aria-hidden="true"></span>
                                     </span>
                                     <h2>Samsung Camera</h2>
                                     <h4>Saepe debitis autem minima</h4>
                                     <figure>
                                         <img src="{{asset('public/images/e2.jpg')}}" alt="product" class="img-responsive" />
                                     </figure>
                                     <span class="price">
                                         $8000
                                     </span>
                                    </a>
                                 </div>
                            <div class="product-card">
                                    <a href="{{route('shop-single')}}">
                                <span class="tag">
                                    <span class="fa fa-shopping-cart" aria-hidden="true"></span>
                                </span>
                                <h2>Sony Camera</h2>
                                <h4>Saepe debitis autem minima</h4>
                                <figure>
                                    <img src="{{asset('public/images/e3.jpg')}}" alt="product" class="img-responsive" />
                                </figure>
                                <span class="price">
                                    $1000
                                </span>
                            </a>
                            </div>
                            <div class="product-card">
                                    <a href="{{route('shop-single')}}">
                                 <span class="tag">
                                     <span class="fa fa-shopping-cart" aria-hidden="true"></span>
                                 </span>
                                 <h2>Fujifilm Camera</h2>
                                 <h4>Saepe debitis autem minima</h4>
                                 <figure>
                                     <img src="{{asset('public/images/e2.jpg')}}" alt="product" class="img-responsive" />
                                 </figure>
                                 <span class="price">
                                     $1500
                                 </span>
                                </a>
                             </div>
                             <div class="product-card">
                                    <a href="{{route('shop-single')}}">
                                     <span class="tag">
                                         <span class="fa fa-shopping-cart" aria-hidden="true"></span>
                                     </span>
                                     <h2>Pentax Camera</h2>
                                     <h4>Saepe debitis autem minima</h4>
                                     <figure>
                                         <img src="{{asset('public/images/e1.jpg')}}" alt="product" class="img-responsive" />
                                     </figure>
                                     <span class="price">
                                         $2300
                                     </span>
                                    </a>
                                 </div>
                                 <div class="product-card">
                                        <a href="{{route('shop-single')}}">
                                         <span class="tag">
                                             <span class="fa fa-shopping-cart" aria-hidden="true"></span>
                                         </span>
                                         <h2>Philips Camera</h2>
                                         <h4>Saepe debitis autem minima</h4>
                                         <figure>
                                             <img src="{{asset('public/images/e2.jpg')}}" alt="product" class="img-responsive" />
                                         </figure>
                                         <span class="price">
                                             $5200
                                         </span>
                                         </a>
                                     </div>
                        </div>

               </div>
           </div>
       </div>
   </section>
@endsection