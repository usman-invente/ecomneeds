@extends('layouts.app')
@section('fancybox-css')
    <link href="{{asset('public/css/jquery.fancybox.css')}}" rel="stylesheet" type="text/css" media="screen"/>
@endsection
@section('content')
    <!-- /Topmenu-4 block -->
    <!-- //bread-crumbs -->
    <section class="w3l-bread-crumbs">
        <div class="inner-image">
            <div class="wrapper">
                <div class="beread-titles">
                    <h3>Pricing</h3>
                    <ul class="breadcrumbs-custom-path">
                        <li><a href="index.html">Home <span class="fa fa-angle-double-right" aria-hidden="true"></span></a>
                        </li>
                        <li class="active">Pricing</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- //bread-crumbs -->
    <section class="w3l-pricing-8">
        <div class="pricing-main-section">
            <div class="wrapper">
                <div class="d-grid">
                    <div class="pricing">
                        <div class="row2">
                            <p class="catagiri">Basic</p>
                            <a class="fancybox" data-fancybox-width="1000" data-fancybox-height="200" rel="basic"
                               href="#test"><img src="{{asset('public/images/b1.jpg')}}"
                                                 style="width:31%;"></a>

                            <div class="ba" style="display: none;" id="test">
                                <div class="ba1">
                                    <div class="ttl">Before</div>
                                    <div class="clear"></div>
                                    <img class="lazy beforeafterimages bai  lazy_load2"
                                         src="{{asset('public/images/b1.jpg')}}"
                                         data-src="{{asset('public/images/b1.jpg')}}"
                                         data-zoom-image="{{asset('public/images/b1.jpg')}}"/>
                                    <div class="clear"></div>
                                </div>
                                <div class="ba2">
                                    <div class="ttl">After</div>
                                    <div class="clear"></div>
                                    <img class="lazy beforeafterimages1 bai  lazy_load2"
                                         src="{{asset('public/images/b1.jpg')}}"
                                         data-src="{{asset('public/images/b1.jpg')}}"
                                         data-zoom-image="{{asset('public/images/b1.jpg')}}"/>
                                    <div class="clear"></div>
                                </div>


                            </div>

                            <a class="fancybox" data-fancybox-width="1000" data-fancybox-height="200" rel="basic"
                               href="#test1"><img src="{{asset('public/images/b2 (2).jpg')}}"
                                                  style="width:31%;"></a>
                            <div class="ba" style="display: none;" id="test1">
                                <div class="ba1">
                                    <div class="ttl">Before</div>
                                    <div class="clear"></div>
                                    <img class="lazy beforeafterimages bai  lazy_load2"
                                         src="{{asset('public/images/b2 (2).jpg')}}"
                                         data-src="{{asset('public/images/b2 (2).jpg')}}"
                                         data-zoom-image="{{asset('public/images/b1.jpg')}}"/>
                                    <div class="clear"></div>
                                </div>
                                <div class="ba2">
                                    <div class="ttl">After</div>
                                    <div class="clear"></div>
                                    <img class="lazy beforeafterimages1 bai  lazy_load2"
                                         src="{{asset('public/images/b2 (2).jpg')}}"
                                         data-src="{{asset('public/images/b2 (2).jpg')}}"
                                         data-zoom-image="{{asset('public/images/b1.jpg')}}"/>
                                    <div class="clear"></div>
                                </div>


                            </div>

                            <a class="fancybox" data-fancybox-width="1000" data-fancybox-height="200" rel="basic"
                               href="#test2"><img src="{{asset('public/images/b3.jpg')}}"
                                                  style="width:31%;"></a>
                            <div class="ba" style="display: none;" id="test2">
                                <div class="ba1">
                                    <div class="ttl">Before</div>
                                    <div class="clear"></div>
                                    <img class="lazy beforeafterimages bai  lazy_load2"
                                         src="{{asset('public/images/b3.jpg')}}"
                                         data-src="{{asset('public/images/b3.jpg')}}"
                                         data-zoom-image="{{asset('public/images/b1.jpg')}}"/>
                                    <div class="clear"></div>
                                </div>
                                <div class="ba2">
                                    <div class="ttl">After</div>
                                    <div class="clear"></div>
                                    <img class="lazy beforeafterimages1 bai  lazy_load2"
                                         src="{{asset('public/images/b3.jpg')}}"
                                         data-src="{{asset('public/images/b3.jpg')}}"
                                         data-zoom-image="{{asset('public/images/b1.jpg')}}"/>
                                    <div class="clear"></div>
                                </div>


                            </div>

                            <h3 class="praic-cost">$2.00<span class="memo">/picture</span></h3>
                            <ul class="praic-info">
                                <li>
                                    <p class="praic-list"><span class="fa fa-check" aria-hidden="true"></span>
                                        Light Correction<br>(up to 3 people) </p>
                                </li>
                                <li>
                                    <p class="praic-list"><span class="fa fa-check" aria-hidden="true"></span>
                                        Red Eye Effect</p>
                                </li>
                                <li>
                                    <p class="praic-list"><span class="fa fa-check" aria-hidden="true"></span>
                                        Blemish Removal</p>
                                </li>

                                <li>
                                    <p class="praic-list"><span class="fa fa-check" aria-hidden="true"></span>
                                        Scar, Pimple, Acne</p>
                                </li>

                                <li>
                                    <p class="praic-list"><span class="fa fa-check" aria-hidden="true"></span>
                                        Face Skin Smoothening</p>
                                </li>


                                <li>
                                    <p class="praic-list"><span class="fa fa-check" aria-hidden="true"></span>
                                        Teeth Whitening</p>
                                </li>


                                <li>
                                    <p class="praic-list"><span class="fa fa-check" aria-hidden="true"></span>
                                        Color Correction</p>
                                </li>

                                <li>
                                    <p class="praic-list"><span class="fa fa-check" aria-hidden="true"></span>
                                        Image Cropping</p>
                                </li>

                                <li>
                                    <p class="praic-list"><span class="fa fa-times" aria-hidden="true"></span>
                                        Headshots Editing</p>
                                </li>

                                <li>
                                    <p class="praic-list"><span class="fa fa-times" aria-hidden="true"></span>
                                        Studio Photos Editing </p>
                                </li>

                                <li>
                                    <p class="praic-list"><span class="fa fa-times" aria-hidden="true"></span>
                                        Body Retouching </p>
                                </li>

                                <li>
                                    <p class="praic-list"><span class="fa fa-times" aria-hidden="true"></span>
                                        Touch Up of the Background </p>
                                </li>

                                <li>
                                    <p class="praic-list"><span class="fa fa-times" aria-hidden="true"></span>
                                        Newborn Photo Editing </p>
                                </li>


                            </ul>
                        </div>

                        <div class="praic-button">
                            <a href="{{route('createorder')}}" class="btn" type="submit">Order Now</a>
                        </div>


                    </div>
                    <div class="pricing">
                        <div class="row1">
                            <p class="catagiri">Pro</p>
                            <a class="fancybox" data-fancybox-width="1000" data-fancybox-height="200" rel="basic"
                               href="#test"><img src="{{asset('public/images/b1.jpg')}}"
                                                 style="width:31%;"></a>

                            <div class="ba" style="display: none;" id="test">
                                <div class="ba1">
                                    <div class="ttl">Before</div>
                                    <div class="clear"></div>
                                    <img class="lazy beforeafterimages bai  lazy_load2"
                                         src="{{asset('public/images/b1.jpg')}}"
                                         data-src="{{asset('public/images/b1.jpg')}}"
                                         data-zoom-image="{{asset('public/images/b1.jpg')}}"/>
                                    <div class="clear"></div>
                                </div>
                                <div class="ba2">
                                    <div class="ttl">After</div>
                                    <div class="clear"></div>
                                    <img class="lazy beforeafterimages1 bai  lazy_load2"
                                         src="{{asset('public/images/b1.jpg')}}"
                                         data-src="{{asset('public/images/b1.jpg')}}"
                                         data-zoom-image="{{asset('public/images/b1.jpg')}}"/>
                                    <div class="clear"></div>
                                </div>


                            </div>

                            <a class="fancybox" data-fancybox-width="1000" data-fancybox-height="200" rel="basic"
                               href="#test1"><img src="{{asset('public/images/b2 (2).jpg')}}"
                                                  style="width:31%;"></a>
                            <div class="ba" style="display: none;" id="test1">
                                <div class="ba1">
                                    <div class="ttl">Before</div>
                                    <div class="clear"></div>
                                    <img class="lazy beforeafterimages bai  lazy_load2"
                                         src="{{asset('public/images/b2 (2).jpg')}}"
                                         data-src="{{asset('public/images/b2 (2).jpg')}}"
                                         data-zoom-image="{{asset('public/images/b1.jpg')}}"/>
                                    <div class="clear"></div>
                                </div>
                                <div class="ba2">
                                    <div class="ttl">After</div>
                                    <div class="clear"></div>
                                    <img class="lazy beforeafterimages1 bai  lazy_load2"
                                         src="{{asset('public/images/b2 (2).jpg')}}"
                                         data-src="{{asset('public/images/b2 (2).jpg')}}"
                                         data-zoom-image="{{asset('public/images/b1.jpg')}}"/>
                                    <div class="clear"></div>
                                </div>


                            </div>

                            <a class="fancybox" data-fancybox-width="1000" data-fancybox-height="200" rel="basic"
                               href="#test2"><img src="{{asset('public/images/b3.jpg')}}"
                                                  style="width:31%;"></a>
                            <div class="ba" style="display: none;" id="test2">
                                <div class="ba1">
                                    <div class="ttl">Before</div>
                                    <div class="clear"></div>
                                    <img class="lazy beforeafterimages bai  lazy_load2"
                                         src="{{asset('public/images/b3.jpg')}}"
                                         data-src="{{asset('public/images/b3.jpg')}}"
                                         data-zoom-image="{{asset('public/images/b1.jpg')}}"/>
                                    <div class="clear"></div>
                                </div>
                                <div class="ba2">
                                    <div class="ttl">After</div>
                                    <div class="clear"></div>
                                    <img class="lazy beforeafterimages1 bai  lazy_load2"
                                         src="{{asset('public/images/b3.jpg')}}"
                                         data-src="{{asset('public/images/b3.jpg')}}"
                                         data-zoom-image="{{asset('public/images/b1.jpg')}}"/>
                                    <div class="clear"></div>
                                </div>


                            </div>
                            <h3 class="praic-cost">$5.00<span class="memo">/picture</span></h3>
                            <ul class="praic-info">
                                <li>
                                    <p class="praic-list"><span class="fa fa-check" aria-hidden="true"></span>
                                        Basic Correction</p>
                                </li>
                                <li>
                                    <p class="praic-list"><span class="fa fa-check" aria-hidden="true"></span>
                                        Pro Beauty Correction </p>
                                </li>
                                <li>
                                    <p class="praic-list"><span class="fa fa-check" aria-hidden="true"></span>
                                        Body Correction <br> / Retouching</p>
                                </li>
                                <li>
                                    <p class="praic-list"><span class="fa fa-check" aria-hidden="true"></span>
                                        Weight Reduction</p>
                                </li>
                                <li>
                                    <p class="praic-list"><span class="fa fa-check" aria-hidden="true"></span>
                                        BackGround Enhancement</p>
                                </li>

                                <li>
                                    <p class="praic-list"><span class="fa fa-check" aria-hidden="true"></span>
                                        Removing Stray Hair</p>
                                </li>

                                <li>
                                    <p class="praic-list"><span class="fa fa-check" aria-hidden="true"></span>
                                        Extending Background</p>
                                </li>

                                <li>
                                    <p class="praic-list"><span class="fa fa-check" aria-hidden="true"></span>
                                        Face Wrinkles Removal</p>
                                </li>

                                <li>
                                    <p class="praic-list"><span class="fa fa-check" aria-hidden="true"></span>
                                        Removing Small Objects</p>
                                </li>

                                <li>
                                    <p class="praic-list"><span class="fa fa-check" aria-hidden="true"></span>
                                        Removing Small ObjectsRemoving Small Objects</p>
                                </li>

                                <li>
                                    <p class="praic-list"><span class="fa fa-check" aria-hidden="true"></span>
                                        Newborn Photo Editing</p>
                                </li>

                                <li>
                                    <p class="praic-list"><span class="fa fa-check" aria-hidden="true"></span>
                                        Portrait Photo Retouching</p>
                                </li>

                                <li>
                                    <p class="praic-list"><span class="fa fa-times" aria-hidden="true"></span>
                                        Masking Images</p>
                                </li>

                            </ul>
                        </div>
                        <div class="praic-button">
                            <a href="{{route('createorder')}}" class="btn" type="submit">Order Now</a>
                        </div>
                    </div>
                    <div class="pricing">
                        <div class="row1">
                            <p class="catagiri">Standard</p>
                            <a class="fancybox" data-fancybox-width="1000" data-fancybox-height="200" rel="basic"
                               href="#test"><img src="{{asset('public/images/b1.jpg')}}"
                                                 style="width:31%;"></a>

                            <div class="ba" style="display: none;" id="test">
                                <div class="ba1">
                                    <div class="ttl">Before</div>
                                    <div class="clear"></div>
                                    <img class="lazy beforeafterimages bai  lazy_load2"
                                         src="{{asset('public/images/b1.jpg')}}"
                                         data-src="{{asset('public/images/b1.jpg')}}"
                                         data-zoom-image="{{asset('public/images/b1.jpg')}}"/>
                                    <div class="clear"></div>
                                </div>
                                <div class="ba2">
                                    <div class="ttl">After</div>
                                    <div class="clear"></div>
                                    <img class="lazy beforeafterimages1 bai  lazy_load2"
                                         src="{{asset('public/images/b1.jpg')}}"
                                         data-src="{{asset('public/images/b1.jpg')}}"
                                         data-zoom-image="{{asset('public/images/b1.jpg')}}"/>
                                    <div class="clear"></div>
                                </div>


                            </div>

                            <a class="fancybox" data-fancybox-width="1000" data-fancybox-height="200" rel="basic"
                               href="#test1"><img src="{{asset('public/images/b2 (2).jpg')}}"
                                                  style="width:31%;"></a>
                            <div class="ba" style="display: none;" id="test1">
                                <div class="ba1">
                                    <div class="ttl">Before</div>
                                    <div class="clear"></div>
                                    <img class="lazy beforeafterimages bai  lazy_load2"
                                         src="{{asset('public/images/b2 (2).jpg')}}"
                                         data-src="{{asset('public/images/b2 (2).jpg')}}"
                                         data-zoom-image="{{asset('public/images/b1.jpg')}}"/>
                                    <div class="clear"></div>
                                </div>
                                <div class="ba2">
                                    <div class="ttl">After</div>
                                    <div class="clear"></div>
                                    <img class="lazy beforeafterimages1 bai  lazy_load2"
                                         src="{{asset('public/images/b2 (2).jpg')}}"
                                         data-src="{{asset('public/images/b2 (2).jpg')}}"
                                         data-zoom-image="{{asset('public/images/b1.jpg')}}"/>
                                    <div class="clear"></div>
                                </div>


                            </div>

                            <a class="fancybox" data-fancybox-width="1000" data-fancybox-height="200" rel="basic"
                               href="#test2"><img src="{{asset('public/images/b3.jpg')}}"
                                                  style="width:31%;"></a>
                            <div class="ba" style="display: none;" id="test2">
                                <div class="ba1">
                                    <div class="ttl">Before</div>
                                    <div class="clear"></div>
                                    <img class="lazy beforeafterimages bai  lazy_load2"
                                         src="{{asset('public/images/b3.jpg')}}"
                                         data-src="{{asset('public/images/b3.jpg')}}"
                                         data-zoom-image="{{asset('public/images/b1.jpg')}}"/>
                                    <div class="clear"></div>
                                </div>
                                <div class="ba2">
                                    <div class="ttl">After</div>
                                    <div class="clear"></div>
                                    <img class="lazy beforeafterimages1 bai  lazy_load2"
                                         src="{{asset('public/images/b3.jpg')}}"
                                         data-src="{{asset('public/images/b3.jpg')}}"
                                         data-zoom-image="{{asset('public/images/b1.jpg')}}"/>
                                    <div class="clear"></div>
                                </div>


                            </div>
                            <h3 class="praic-cost">150<span class="memo">/mo.</span></h3>
                            <ul class="praic-info">
                                <li>
                                    <p class="praic-list"><span class="fa fa-check" aria-hidden="true"></span>
                                        Light Correction<br>(up to 3 people) </p>
                                </li>
                                <li>
                                    <p class="praic-list"><span class="fa fa-check" aria-hidden="true"></span>
                                        Red Eye Effect</p>
                                </li>
                                <li>
                                    <p class="praic-list"><span class="fa fa-check" aria-hidden="true"></span>
                                        Blemish Removal</p>
                                </li>

                                <li>
                                    <p class="praic-list"><span class="fa fa-check" aria-hidden="true"></span>
                                        Scar, Pimple, Acne</p>
                                </li>

                                <li>
                                    <p class="praic-list"><span class="fa fa-check" aria-hidden="true"></span>
                                        Face Skin Smoothening</p>
                                </li>


                                <li>
                                    <p class="praic-list"><span class="fa fa-check" aria-hidden="true"></span>
                                        Teeth Whitening</p>
                                </li>


                                <li>
                                    <p class="praic-list"><span class="fa fa-check" aria-hidden="true"></span>
                                        Color Correction</p>
                                </li>

                                <li>
                                    <p class="praic-list"><span class="fa fa-check" aria-hidden="true"></span>
                                        Image Cropping</p>
                                </li>

                                <li>
                                    <p class="praic-list"><span class="fa fa-times" aria-hidden="true"></span>
                                        Headshots Editing</p>
                                </li>

                                <li>
                                    <p class="praic-list"><span class="fa fa-times" aria-hidden="true"></span>
                                        Studio Photos Editing </p>
                                </li>

                                <li>
                                    <p class="praic-list"><span class="fa fa-times" aria-hidden="true"></span>
                                        Body Retouching </p>
                                </li>

                                <li>
                                    <p class="praic-list"><span class="fa fa-times" aria-hidden="true"></span>
                                        Touch Up of the Background </p>
                                </li>

                                <li>
                                    <p class="praic-list"><span class="fa fa-times" aria-hidden="true"></span>
                                        Newborn Photo Editing </p>
                                </li>


                            </ul>
                        </div>
                        <div class="praic-button">
                            <a href="{{route('createorder')}}" class="btn" type="submit">Order Now</a>
                        </div>
                    </div>
                    <div class="pricing">
                        <div class="row1">
                            <p class="catagiri">Professional</p>
                            <a class="fancybox" data-fancybox-width="1000" data-fancybox-height="200" rel="basic"
                               href="#test"><img src="{{asset('public/images/b1.jpg')}}"
                                                 style="width:31%;"></a>

                            <div class="ba" style="display: none;" id="test">
                                <div class="ba1">
                                    <div class="ttl">Before</div>
                                    <div class="clear"></div>
                                    <img class="lazy beforeafterimages bai  lazy_load2"
                                         src="{{asset('public/images/b1.jpg')}}"
                                         data-src="{{asset('public/images/b1.jpg')}}"
                                         data-zoom-image="{{asset('public/images/b1.jpg')}}"/>
                                    <div class="clear"></div>
                                </div>
                                <div class="ba2">
                                    <div class="ttl">After</div>
                                    <div class="clear"></div>
                                    <img class="lazy beforeafterimages1 bai  lazy_load2"
                                         src="{{asset('public/images/b1.jpg')}}"
                                         data-src="{{asset('public/images/b1.jpg')}}"
                                         data-zoom-image="{{asset('public/images/b1.jpg')}}"/>
                                    <div class="clear"></div>
                                </div>


                            </div>

                            <a class="fancybox" data-fancybox-width="1000" data-fancybox-height="200" rel="basic"
                               href="#test1"><img src="{{asset('public/images/b2 (2).jpg')}}"
                                                  style="width:31%;"></a>
                            <div class="ba" style="display: none;" id="test1">
                                <div class="ba1">
                                    <div class="ttl">Before</div>
                                    <div class="clear"></div>
                                    <img class="lazy beforeafterimages bai  lazy_load2"
                                         src="{{asset('public/images/b2 (2).jpg')}}"
                                         data-src="{{asset('public/images/b2 (2).jpg')}}"
                                         data-zoom-image="{{asset('public/images/b1.jpg')}}"/>
                                    <div class="clear"></div>
                                </div>
                                <div class="ba2">
                                    <div class="ttl">After</div>
                                    <div class="clear"></div>
                                    <img class="lazy beforeafterimages1 bai  lazy_load2"
                                         src="{{asset('public/images/b2 (2).jpg')}}"
                                         data-src="{{asset('public/images/b2 (2).jpg')}}"
                                         data-zoom-image="{{asset('public/images/b1.jpg')}}"/>
                                    <div class="clear"></div>
                                </div>


                            </div>

                            <a class="fancybox" data-fancybox-width="1000" data-fancybox-height="200" rel="basic"
                               href="#test2"><img src="{{asset('public/images/b3.jpg')}}"
                                                  style="width:31%;"></a>
                            <div class="ba" style="display: none;" id="test2">
                                <div class="ba1">
                                    <div class="ttl">Before</div>
                                    <div class="clear"></div>
                                    <img class="lazy beforeafterimages bai  lazy_load2"
                                         src="{{asset('public/images/b3.jpg')}}"
                                         data-src="{{asset('public/images/b3.jpg')}}"
                                         data-zoom-image="{{asset('public/images/b1.jpg')}}"/>
                                    <div class="clear"></div>
                                </div>
                                <div class="ba2">
                                    <div class="ttl">After</div>
                                    <div class="clear"></div>
                                    <img class="lazy beforeafterimages1 bai  lazy_load2"
                                         src="{{asset('public/images/b3.jpg')}}"
                                         data-src="{{asset('public/images/b3.jpg')}}"
                                         data-zoom-image="{{asset('public/images/b1.jpg')}}"/>
                                    <div class="clear"></div>
                                </div>


                            </div>
                            <h3 class="praic-cost">$180<span class="memo">/mo.</span></h3>
                            <ul class="praic-info">
                                <li>
                                    <p class="praic-list"><span class="fa fa-check" aria-hidden="true"></span>
                                        Light Correction<br>(up to 3 people) </p>
                                </li>
                                <li>
                                    <p class="praic-list"><span class="fa fa-check" aria-hidden="true"></span>
                                        Red Eye Effect</p>
                                </li>
                                <li>
                                    <p class="praic-list"><span class="fa fa-check" aria-hidden="true"></span>
                                        Blemish Removal</p>
                                </li>

                                <li>
                                    <p class="praic-list"><span class="fa fa-check" aria-hidden="true"></span>
                                        Scar, Pimple, Acne</p>
                                </li>

                                <li>
                                    <p class="praic-list"><span class="fa fa-check" aria-hidden="true"></span>
                                        Face Skin Smoothening</p>
                                </li>


                                <li>
                                    <p class="praic-list"><span class="fa fa-check" aria-hidden="true"></span>
                                        Teeth Whitening</p>
                                </li>


                                <li>
                                    <p class="praic-list"><span class="fa fa-check" aria-hidden="true"></span>
                                        Color Correction</p>
                                </li>

                                <li>
                                    <p class="praic-list"><span class="fa fa-check" aria-hidden="true"></span>
                                        Image Cropping</p>
                                </li>

                                <li>
                                    <p class="praic-list"><span class="fa fa-times" aria-hidden="true"></span>
                                        Headshots Editing</p>
                                </li>

                                <li>
                                    <p class="praic-list"><span class="fa fa-times" aria-hidden="true"></span>
                                        Studio Photos Editing </p>
                                </li>

                                <li>
                                    <p class="praic-list"><span class="fa fa-times" aria-hidden="true"></span>
                                        Body Retouching </p>
                                </li>

                                <li>
                                    <p class="praic-list"><span class="fa fa-times" aria-hidden="true"></span>
                                        Touch Up of the Background </p>
                                </li>

                                <li>
                                    <p class="praic-list"><span class="fa fa-times" aria-hidden="true"></span>
                                        Newborn Photo Editing </p>
                                </li>


                            </ul>
                        </div>
                        <div class="praic-button">
                            <a href="{{route('createorder')}}" class="btn" type="submit">Order Now</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection

@section('fancybox-js')

    <script type="text/javascript" src="{{asset('public/js/jquery.fancybox.pack.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $(".fancybox").fancybox({

                autoSize: false,
                helpers: {
                    overlay: {
                        css: {
                            'background': 'rgba(58, 42, 45, 0.95)'
                        }
                    }
                },
                beforeLoad: function () {
                    this.width = parseInt(this.element.data('fancybox-width'));
                    this.height = parseInt(this.element.data('fancybox-height'));
                }
            });
        });
    </script>
@endsection
