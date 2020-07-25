@extends('layouts.app')
@section('content')
<!-- /Topmenu-4 block -->
<section class="w3l-bread-crumbs">
    <div class="inner-image">
        <div class="wrapper">
            <div class="beread-titles">
                <h3>Ecommerce-single</h3>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.html">Home <span class="fa fa-angle-double-right" aria-hidden="true"></span></a>
                    </li>
                    <li class="active">Ecommerce-single</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="w3l-ecommerce-single">
    <div class="ecommerce-page">
        <div class="wrapper">
            <div class="ecommerce-cart-two">
                <div class="cart-image">
                    <a href="#" class="column-img" id="zoomIn">
                        <figure>
                            <img src="{{asset('public/images/blog55.jpg')}}" alt="product" class="img-responsive" />
                        </figure>
                    </a>

                </div>
                <div class="cart-details">
                    <h4>Brown coat with stylish glasses</h4>

                    <ul>
                        <li>
                            <del>
                                $200.00
                            </del>
                        </li>
                        <li>
                            <h6>$150.00</h6>

                        </li>
                    </ul>
                    <div class="ratings">
                        <h6>Reviews</h6>
                        <ul class="star">
                            <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a>
                            </li>
                            <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a>
                            </li>
                            <li><a href="#"><span class="fa fa-star-half-o" aria-hidden="true"></span></a>
                            </li>
                            <li><a href="#"><span class="fa fa-star-o" aria-hidden="true"></span></a>
                            </li>
                            <li><a href="#"><span class="fa fa-star-o" aria-hidden="true"></span></a>
                            </li>
                        </ul>
                        <p></p>
                    </div>
                    <p>Dolor sit amet consectetur adipisicing elit. Animi iste,
                        minus quibusdam quam ipsam autem nihil atque velit, nesciunt quo
                        dolores tempora praesentium consequuntur deserunt eum natus beatae
                        voluptatem commodi Dolor sit amet consectetur adipisicing elit. Animi iste,
                        minus quibusdam quam ipsam autem nihil atque velit, nesciunt quo
                        dolores tempora praesentium consequuntur deserunt eum natus beatae
                        voluptatem commodi</p>
                    <div class="occasion-cart">
                        <a href="ecommerce-cart.html " class="add-product">Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="description">
                <div class="titles-names">
                    <h3>Description</h3>
                </div>
                <p>Dolor sit amet consectetur adipisicing elit. Animi iste,
                    minus quibusdam quam ipsam autem nihil atque velit, nesciunt quo
                    dolores tempora praesentium consequuntur deserunt eum natus beatae
                    voluptatem commodi Dolor sit amet consectetur adipisicing elit. Animi iste,
                    minus quibusdam quam ipsam autem nihil atque velit, nesciunt quo
                    dolores tempora praesentium consequuntur deserunt eum natus beatae
                    voluptatem commodi</p>
            </div>
            <div class="product-list">
                <div class="titles-names">
                    <h3> Related Products</h3>
                </div>
                <div class="products-grids">
                    <div class="product-details">
                        <a href="ecommerce.html">
                            <img src="{{asset('public/images/g4.jpg')}}" alt="product" class="img-responsive">
                            <div class="product-cost">
                                <h6>$400</h6>
                                <h5>Deserunt eum natus </h5>
                                <p> Animi iste, minus quib usdam nihil atque velit, nesciunt quo
                                    dolores tempora prasen tium consqu untur </p>
                            </div>
                        </a>
                    </div>
                    <div class="product-details">
                        <a href="ecommerce.html">
                            <img src="{{asset('public/images/g3.jpg')}}" alt="product" class="img-responsive">
                            <div class="product-cost">
                                <h6>$500</h6>
                                <h5>Quibu sdam quam </h5>
                                <p> Animi iste, minus quibu sdam nihil atque velit, nesciunt quo
                                    dolores tempora prasen tium consqu untur </p>
                            </div>
                        </a>
                    </div>
                    <div class="product-details">
                        <a href="ecommerce.html">
                            <img src="{{asset('public/images/g2.jpg')}}" alt="product" class="img-responsive">
                            <div class="product-cost">
                                <h6>$700</h6>
                                <h5>Ipsam autem nihil atque</h5>
                                <p> Animi iste, minus quib usdam nihil atque velit, nesciunt quo
                                    dolores tempora prasen tium consqu untur </p>
                            </div>
                        </a>
                    </div>
                    <div class="product-details">
                        <a href="ecommerce.html">
                            <img src="{{asset('public/images/e3.jpg')}}" alt="product" class="img-responsive">
                            <div class="product-cost">
                                <h6>$600</h6>
                                <h5>Prae sentium cons atque</h5>
                                <p> Animi iste, minus quibu sdam nihil atque velit, nesciunt quo
                                    dolores tempora prasen tium consqu untur </p>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection