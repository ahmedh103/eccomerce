@extends('EndUser.Includes.master')

@section('title')
    Home
@endsection

@section('content')
    <!--=====================================
            BANNER PART START
=======================================-->
    <section class="banner-part">
        <div class="container">
            <div class="banner-content">
                <h1>You can #Buy, #Rent, #Booking anything from here.</h1>
                <p>Buy and sell everything from used cars to mobile phones and computers, or search for property, jobs and more in the world.</p>
                <a href="{{route('endUser.ads.index')}}" class="btn btn-outline">
                    <i class="fas fa-eye"></i>
                    <span>Show all ads</span>
                </a>
            </div>
        </div>
    </section>
    <!--=====================================
                BANNER PART END
    =======================================-->


    <!--=====================================
                SUGGEST PART START
    =======================================-->
    <section class="suggest-part">
        <div class="container">
            <div class="suggest-slider slider-arrow">
                @foreach($departments as $department)

                    <a href="ad-list-column3.html" class="suggest-card">
                        <img src="{{ asset($department->image) }}" alt="{{$department->name}}">
                        <h6>{{$department->name}}</h6>
                        <p>({{$department->categories->count()}})Category</p>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
    <!--=====================================
                SUGGEST PART END
    =======================================-->


    <!--=====================================
                FEATURE PART START
    =======================================-->
    <section class="section feature-part">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-lg-5">
                    <div class="section-side-heading">
                        <h2>Find your needs in our best <span>Featured Ads</span></h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit aspernatur illum vel sunt libero
                            voluptatum repudiandae veniam maxime tenetur fugiat eaque alias nobis doloremque culpa
                            nam.</p>
                        <a href="ad-list-column3.html" class="btn btn-inline">
                            <i class="fas fa-eye"></i>
                            <span>view all featured</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-7 col-lg-7">
                    <div class="feature-card-slider slider-arrow">
                        <div class="feature-card">
                            <a href="#" class="feature-img">
                                <img src="images/product/10.jpg" alt="feature">
                            </a>
                            <div class="cross-inline-badge feature-badge">
                                <span>featured</span>
                                <i class="fas fa-book-open"></i>
                            </div>
                            <button type="button" class="feature-wish">
                                <i class="fas fa-heart"></i>
                            </button>
                            <div class="feature-content">
                                <ol class="breadcrumb feature-category">
                                    <li><span class="flat-badge rent">rent</span></li>
                                    <li class="breadcrumb-item"><a href="#">automobile</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">private car</li>
                                </ol>
                                <h3 class="feature-title"><a href="ad-details-left.html">Unde eveniet ducimus nostrum
                                        maiores soluta temporibus ipsum dolor sit amet.</a></h3>
                                <div class="feature-meta">
                                    <span class="feature-price">$1200<small>/Monthly</small></span>
                                    <span class="feature-time"><i class="fas fa-clock"></i>56 minute ago</span>
                                </div>
                            </div>
                        </div>
                        <div class="feature-card">
                            <a href="#" class="feature-img">
                                <img src="images/product/01.jpg" alt="feature">
                            </a>
                            <div class="cross-inline-badge feature-badge">
                                <span>featured</span>
                                <i class="fas fa-book-open"></i>
                            </div>
                            <button type="button" class="feature-wish">
                                <i class="fas fa-heart"></i>
                            </button>
                            <div class="feature-content">
                                <ol class="breadcrumb feature-category">
                                    <li><span class="flat-badge booking">booking</span></li>
                                    <li class="breadcrumb-item"><a href="#">Property</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">House</li>
                                </ol>
                                <h3 class="feature-title"><a href="ad-details-left.html">Unde eveniet ducimus nostrum
                                        maiores soluta temporibus ipsum dolor sit amet.</a></h3>
                                <div class="feature-meta">
                                    <span class="feature-price">$800<small>/perday</small></span>
                                    <span class="feature-time"><i class="fas fa-clock"></i>56 minute ago</span>
                                </div>
                            </div>
                        </div>
                        <div class="feature-card">
                            <a href="#" class="feature-img">
                                <img src="images/product/08.jpg" alt="feature">
                            </a>
                            <div class="cross-inline-badge feature-badge">
                                <span>featured</span>
                                <i class="fas fa-book-open"></i>
                            </div>
                            <button type="button" class="feature-wish">
                                <i class="fas fa-heart"></i>
                            </button>
                            <div class="feature-content">
                                <ol class="breadcrumb feature-category">
                                    <li><span class="flat-badge sale">sale</span></li>
                                    <li class="breadcrumb-item"><a href="#">gadget</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">iphone</li>
                                </ol>
                                <h3 class="feature-title"><a href="ad-details-left.html">Unde eveniet ducimus nostrum
                                        maiores soluta temporibus ipsum dolor sit amet.</a></h3>
                                <div class="feature-meta">
                                    <span class="feature-price">$1150<small>/Negotiable</small></span>
                                    <span class="feature-time"><i class="fas fa-clock"></i>56 minute ago</span>
                                </div>
                            </div>
                        </div>
                        <div class="feature-card">
                            <a href="#" class="feature-img">
                                <img src="images/product/06.jpg" alt="feature">
                            </a>
                            <div class="cross-inline-badge feature-badge">
                                <span>featured</span>
                                <i class="fas fa-book-open"></i>
                            </div>
                            <button type="button" class="feature-wish">
                                <i class="fas fa-heart"></i>
                            </button>
                            <div class="feature-content">
                                <ol class="breadcrumb feature-category">
                                    <li><span class="flat-badge sale">sale</span></li>
                                    <li class="breadcrumb-item"><a href="#">automobile</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">cycle</li>
                                </ol>
                                <h3 class="feature-title"><a href="ad-details-left.html">Unde eveniet ducimus nostrum
                                        maiores soluta temporibus ipsum dolor sit amet.</a></h3>
                                <div class="feature-meta">
                                    <span class="feature-price">$455<small>/fixed</small></span>
                                    <span class="feature-time"><i class="fas fa-clock"></i>56 minute ago</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="feature-thumb-slider">
                        <div class="feature-thumb"><img src="images/product/10.jpg" alt="feature"></div>
                        <div class="feature-thumb"><img src="images/product/01.jpg" alt="feature"></div>
                        <div class="feature-thumb"><img src="images/product/08.jpg" alt="feature"></div>
                        <div class="feature-thumb"><img src="images/product/06.jpg" alt="feature"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                FEATURE PART END
    =======================================-->


    <!--=====================================
                RECOMEND PART START
    =======================================-->
    <section class="section recomend-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-center-heading">
                        <h2>Our Recommend <span>Ads</span></h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit aspernatur illum vel sunt libero
                            voluptatum repudiandae veniam maxime tenetur.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="recomend-slider slider-arrow">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-img">
                                    <img src="images/product/01.jpg" alt="product">
                                </div>
                                <div class="cross-vertical-badge product-badge">
                                    <i class="fas fa-clipboard-check"></i>
                                    <span>recommend</span>
                                </div>
                                <div class="product-type">
                                    <span class="flat-badge booking">booking</span>
                                </div>
                                <ul class="product-action">
                                    <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                    <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                    <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <ol class="breadcrumb product-category">
                                    <li><i class="fas fa-tags"></i></li>
                                    <li class="breadcrumb-item"><a href="#">Luxury</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Duplex House</li>
                                </ol>
                                <h5 class="product-title">
                                    <a href="ad-details-left.html">Lorem ipsum dolor sit amet consect adipisicing elit</a>
                                </h5>
                                <div class="product-meta">
                                    <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                    <span><i class="fas fa-clock"></i>30 min ago</span>
                                </div>
                                <div class="product-info">
                                    <h5 class="product-price">$1500<span>/Per Day</span></h5>
                                    <div class="product-btn">
                                        <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                        <button type="button" title="Wishlist" class="far fa-heart"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-img">
                                    <img src="images/product/03.jpg" alt="product">
                                </div>
                                <div class="cross-vertical-badge product-badge">
                                    <i class="fas fa-clipboard-check"></i>
                                    <span>recommend</span>
                                </div>
                                <div class="product-type">
                                    <span class="flat-badge sale">sale</span>
                                </div>
                                <ul class="product-action">
                                    <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                    <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                    <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <ol class="breadcrumb product-category">
                                    <li><i class="fas fa-tags"></i></li>
                                    <li class="breadcrumb-item"><a href="#">stationary</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">books</li>
                                </ol>
                                <h5 class="product-title">
                                    <a href="ad-details-left.html">Lorem ipsum dolor sit amet consect adipisicing elit</a>
                                </h5>
                                <div class="product-meta">
                                    <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                    <span><i class="fas fa-clock"></i>30 min ago</span>
                                </div>
                                <div class="product-info">
                                    <h5 class="product-price">$470<span>/fixed</span></h5>
                                    <div class="product-btn">
                                        <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                        <button type="button" title="Wishlist" class="far fa-heart"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-img">
                                    <img src="images/product/10.jpg" alt="product">
                                </div>
                                <div class="cross-vertical-badge product-badge">
                                    <i class="fas fa-clipboard-check"></i>
                                    <span>recommend</span>
                                </div>
                                <div class="product-type">
                                    <span class="flat-badge rent">rent</span>
                                </div>
                                <ul class="product-action">
                                    <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                    <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                    <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <ol class="breadcrumb product-category">
                                    <li><i class="fas fa-tags"></i></li>
                                    <li class="breadcrumb-item"><a href="#">automobile</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">private car</li>
                                </ol>
                                <h5 class="product-title">
                                    <a href="ad-details-left.html">Lorem ipsum dolor sit amet consect adipisicing elit</a>
                                </h5>
                                <div class="product-meta">
                                    <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                    <span><i class="fas fa-clock"></i>30 min ago</span>
                                </div>
                                <div class="product-info">
                                    <h5 class="product-price">$3300<span>/per month</span></h5>
                                    <div class="product-btn">
                                        <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                        <button type="button" title="Wishlist" class="far fa-heart"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-img">
                                    <img src="images/product/09.jpg" alt="product">
                                </div>
                                <div class="cross-vertical-badge product-badge">
                                    <i class="fas fa-clipboard-check"></i>
                                    <span>recommend</span>
                                </div>
                                <div class="product-type">
                                    <span class="flat-badge sale">sale</span>
                                </div>
                                <ul class="product-action">
                                    <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                    <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                    <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <ol class="breadcrumb product-category">
                                    <li><i class="fas fa-tags"></i></li>
                                    <li class="breadcrumb-item"><a href="#">animals</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">cat</li>
                                </ol>
                                <h5 class="product-title">
                                    <a href="ad-details-left.html">Lorem ipsum dolor sit amet consect adipisicing elit</a>
                                </h5>
                                <div class="product-meta">
                                    <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                    <span><i class="fas fa-clock"></i>30 min ago</span>
                                </div>
                                <div class="product-info">
                                    <h5 class="product-price">$900<span>/Negotiable</span></h5>
                                    <div class="product-btn">
                                        <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                        <button type="button" title="Wishlist" class="far fa-heart"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-img">
                                    <img src="images/product/02.jpg" alt="product">
                                </div>
                                <div class="cross-vertical-badge product-badge">
                                    <i class="fas fa-clipboard-check"></i>
                                    <span>recommend</span>
                                </div>
                                <div class="product-type">
                                    <span class="flat-badge sale">sale</span>
                                </div>
                                <ul class="product-action">
                                    <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                    <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                    <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <ol class="breadcrumb product-category">
                                    <li><i class="fas fa-tags"></i></li>
                                    <li class="breadcrumb-item"><a href="#">fashion</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">shoes</li>
                                </ol>
                                <h5 class="product-title">
                                    <a href="ad-details-left.html">Lorem ipsum dolor sit amet consect adipisicing elit</a>
                                </h5>
                                <div class="product-meta">
                                    <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                    <span><i class="fas fa-clock"></i>30 min ago</span>
                                </div>
                                <div class="product-info">
                                    <h5 class="product-price">$384<span>/fixed</span></h5>
                                    <div class="product-btn">
                                        <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                        <button type="button" title="Wishlist" class="far fa-heart"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @forelse($our_Recommend_ads as $our_Recommend_ad)
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-img">
                                        <img src="{{asset("$our_Recommend_ad->image")}}"
                                             alt="{{ $our_Recommend_ad->slug }}" width="250px" height="250px">
                                    </div>
                                    <div class="cross-vertical-badge product-badge">
                                        <i class="fas fa-clipboard-check"></i>
                                        <span>recommend</span>
                                    </div>
                                    <div class="product-type">
                                        <span class="flat-badge booking">booking</span>
                                    </div>
                                    <ul class="product-action">
                                        <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                        <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                        <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <ol class="breadcrumb product-category">
                                        <li><i class="fas fa-tags"></i></li>
                                        <li class="breadcrumb-item"><a href="#">Luxury</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Duplex House</li>
                                    </ol>
                                    <h5 class="product-title">
                                        <a href="ad-details-left.html">{{$our_Recommend_ad->description}}</a>
                                    </h5>
                                    <div class="product-meta">
                                        <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                        <span><i class="fas fa-clock"></i>30 min ago</span>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-price">{{$our_Recommend_ad->price}}<span>/Per Day</span></h5>
                                        <div class="product-btn">
                                            <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                            <button type="button" title="Wishlist" class="far fa-heart"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <p>No ads</p>
                        @endforelse
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-50">
                        <a href="ad-list-column3.html" class="btn btn-inline">
                            <i class="fas fa-eye"></i>
                            <span>view all recommend</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                RECOMEND PART START
    =======================================-->


    <!--=====================================
                TREND PART START
    =======================================-->
    <section class="section trend-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-center-heading">
                        <h2>Popular Trending <span>Ads</span></h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit aspernatur illum vel sunt libero
                            voluptatum repudiandae veniam maxime tenetur.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                @forelse($popularTrendingAds as $popularAd)
                    <div class="col-md-11 col-lg-8 col-xl-6">
                        <div class="product-card standard">
                            <div class="product-media">
                                <div class="product-img">
                                    <img src="{{asset($popularAd->image)}}" alt="product">
                                </div>
                                <div class="cross-vertical-badge product-badge">
                                    <i class="fas fa-bolt"></i>
                                    <span>trending</span>
                                </div>
                                <div class="product-type">
                                    <span class="flat-badge booking">{{$popularAd->category->name}}</span>
                                </div>
                                <ul class="product-action">
                                    <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                    <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                    <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <ol class="breadcrumb product-category">
                                    <li><i class="fas fa-tags"></i></li>
                                    <li class="breadcrumb-item"><a href="#">{{$popularAd->category->name}}</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">{{$popularAd->name}}</li>
                                </ol>
                                <h5 class="product-title">
                                    <a href="ad-details-right.html">{{$popularAd->description}}</a>
                                </h5>
                                <div class="product-meta">
                                    <span><i class="fas fa-map-marker-alt"></i>{{$popularAd->city}}</span>
                                    <span><i class="fas fa-clock"></i>{{$popularAd->created_at}}</span>
                                </div>
                                <div class="product-info">
                                    <h5 class="product-price">$ {{$popularAd->price}}<span>/per day</span></h5>
                                    <div class="product-btn">
                                        <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                        <button type="button" title="Wishlist" class="far fa-heart"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <h1>No Ads</h1>
                @endforelse

            </div>
           @if($popularTrendingAds->count() > 0)

                <div class="row">
                    <div class="col-lg-12">
                        <div class="center-20">
                            <a href="ad-list-column3.html" class="btn btn-inline">
                                <i class="fas fa-eye"></i>
                                <span>view all trend</span>
                            </a>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>
    <!--=====================================
                TREND PART END
    =======================================-->


    <!--=====================================
                NICHE PART START
    =======================================-->
    <section class="section niche-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-center-heading">
                        <h2>Browse Our Top <span>Niche</span></h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit aspernatur illum vel sunt libero
                            voluptatum repudiandae veniam maxime tenetur.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="niche-nav">
                        <ul class="nav nav-tabs">
                            <li><a href="#ratings" class="nav-link active" data-toggle="tab">top ratings</a></li>
                            <li><a href="#advertiser" class="nav-link" data-toggle="tab">top advertiser</a></li>
                            <li><a href="#engaged" class="nav-link" data-toggle="tab">top engaged</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="tab-pane active" id="ratings">

                <div class="row">
                    @foreach($ads as $ad)
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-img">
                                        <img src="images/product/07.jpg" alt="product">
                                    </div>
                                    <div class="cross-vertical-badge product-badge">
                                        <i class="fas fa-fire"></i>
                                        <span>{{$ad->type}}</span>
                                    </div>
                                    <div class="product-type">
                                        <span class="flat-badge booking">{{$ad->type}}</span>
                                    </div>
                                    <ul class="product-action">
                                        <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                        <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                        <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <ol class="breadcrumb product-category">
                                        <li><i class="fas fa-tags"></i></li>
                                        <li class="breadcrumb-item"><a href="#">{{$ad->name}}</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">{{$ad->status}}</li>
                                    </ol>
                                    <h5 class="product-title">
                                        <a href="ad-details-left.html">{{$ad->description}}</a>
                                    </h5>
                                    <div class="product-meta">
                                        <span><i class="fas fa-map-marker-alt"></i>{{$ad->city}}</span>
                                        <span><i class="fas fa-clock"></i>30 min ago</span>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-price">${{$ad->price}}<span>/per week</span></h5>
                                        <div class="product-btn">
                                            <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                            <button type="button" title="Wishlist" class="far fa-heart"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div> <!-- Rating ads -->

            <div class="tab-pane " id="advertiser">
                <div class="row">
                    @foreach($ads as $ad)
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-img">
                                        <img src="images/product/08.jpg" alt="product">
                                    </div>
                                    <div class="cross-vertical-badge product-badge">
                                        <i class="fas fa-fire"></i>
                                        <span>top niche</span>
                                    </div>
                                    <div class="product-type">
                                        <span class="flat-badge sale">{{$ad->status}}</span>
                                    </div>
                                    <ul class="product-action">
                                        <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                        <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                        <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <ol class="breadcrumb product-category">
                                        <li><i class="fas fa-tags"></i></li>
                                        <li class="breadcrumb-item"><a href="#">gadget</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">{{$ad->slug}}</li>
                                    </ol>
                                    <h5 class="product-title">
                                        <a href="ad-details-left.html">{{$ad->description}}</a>
                                    </h5>
                                    <div class="product-meta">
                                        <span><i class="fas fa-map-marker-alt"></i>{{$ad->city}}</span>
                                        <span><i class="fas fa-clock"></i>30 min ago</span>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-price">${{$ad->price}}<span>/fixed</span></h5>
                                        <div class="product-btn">
                                            <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                            <button type="button" title="Wishlist" class="far fa-heart"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div> <!-- Advertiser ads -->
            <div class="tab-pane " id="engaged">
                <div class="row">
                    @foreach($ads as $ad)
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-img">
                                        <img src="images/product/08.jpg" alt="product">
                                    </div>
                                    <div class="cross-vertical-badge product-badge">
                                        <i class="fas fa-fire"></i>
                                        <span>top niche</span>
                                    </div>
                                    <div class="product-type">
                                        <span class="flat-badge sale">{{$ad->status}}</span>
                                    </div>
                                    <ul class="product-action">
                                        <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                        <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                        <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <ol class="breadcrumb product-category">
                                        <li><i class="fas fa-tags"></i></li>
                                        <li class="breadcrumb-item"><a href="#">gadget</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">{{$ad->slug}}</li>
                                    </ol>
                                    <h5 class="product-title">
                                        <a href="ad-details-left.html">{{$ad->description}}</a>
                                    </h5>
                                    <div class="product-meta">
                                        <span><i class="fas fa-map-marker-alt"></i>{{$ad->city}}</span>
                                        <span><i class="fas fa-clock"></i>30 min ago</span>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-price">${{$ad->price}}<span>/fixed</span></h5>
                                        <div class="product-btn">
                                            <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                            <button type="button" title="Wishlist" class="far fa-heart"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div> <!-- Advertiser ads -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="center-20">
                        <a href="ad-list-column3.html" class="btn btn-inline">
                            <i class="fas fa-eye"></i>
                            <span>view all ads</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                NICHE PART END
    =======================================-->


    <!--=====================================
                CITY PART START
    =======================================-->
    <section class="section city-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-center-heading">
                        <h2>Top Cities by <span>Ads</span></h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit aspernatur illum vel sunt libero
                            voluptatum repudiandae veniam maxime tenetur.</p>
                    </div>
                </div>
            </div>
            <div class="row">



                @forelse($our_city as $our_citys)
                <div class="col-sm-6 col-md-6 col-lg-3">

                <a href="ad-list-column3.html" class="city-card" style="background:url('{{url($our_citys['image'])}}');background-size: cover">
                    <div class="city-content">
                        <h4>{{$our_citys['city']}}</h4>
                        <p>{{$our_citys['count']}}</p>
                    </div>
                </a>
            </div>
            @empty
            @endforelse
        </div>


            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-20">
                        <a href="cities.html" class="btn btn-inline">
                            <i class="fas fa-eye"></i>
                            <span>view all Cities</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                CITY PART END
    =======================================-->


    <!--=====================================
                CATEGORY PART START
    =======================================-->
    <section class="section category-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-center-heading">
                        <h2>Top Categories by <span>Ads</span></h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit aspernatur illum vel sunt libero
                            voluptatum repudiandae veniam maxime tenetur.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($departments as $department)
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <div class="category-card">
                            <div class="category-head">
                                <img src="images/category/electronics.jpg" alt="category">
                                <a href="#" class="category-content">
                                    <h4>{{$department->name}}</h4>
                                    <p>({{$department->ads_count}}) ads</p>
                                </a>
                            </div>
                            <ul class="category-list">
                                @foreach($department->categories as $category)
                                    <li><a href="#"></a></li>
                                    <li><a href="#"><h6>{{$category->name}}</h6>
                                            <span>({{$category->ads->count()}})</span></a></li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="center-20">
                    <a href="category-list.html" class="btn btn-inline">
                        <i class="fas fa-eye"></i>
                        <span>view all categories</span>
                    </a>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!--=====================================
                CATEGORY PART END
    =======================================-->


    <!--=====================================
                INTRO PART START
    =======================================-->
    <section class="intro-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-center-heading">
                        <h2>Do you have something to advertise?</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit aspernatur illum vel sunt libero
                            voluptatum repudiandae veniam maxime tenetur.</p>
                        <a href="ad-post.html" class="btn btn-outline">
                            <i class="fas fa-plus-circle"></i>
                            <span>post your ad</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                INTRO PART END
    =======================================-->


    <!--=====================================
                 PRICE PART START
    =======================================-->
    <section class="price-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-center-heading">
                        <h2>Best Reliable Pricing Plans</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit aspernatur illum vel sunt libero
                            voluptatum repudiandae veniam maxime tenetur.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="price-card">
                        <div class="price-head">
                            <i class="flaticon-bicycle"></i>
                            <h3>$00</h3>
                            <h4>Free Plan</h4>
                        </div>
                        <ul class="price-list">
                            <li>
                                <i class="fas fa-plus"></i>
                                <p>1 Regular Ad for 7 days</p>
                            </li>
                            <li>
                                <i class="fas fa-times"></i>
                                <p>No Credit card required</p>
                            </li>
                            <li>
                                <i class="fas fa-times"></i>
                                <p>No Top or Featured Ad</p>
                            </li>
                            <li>
                                <i class="fas fa-times"></i>
                                <p>No Ad will be bumped up</p>
                            </li>
                            <li>
                                <i class="fas fa-plus"></i>
                                <p>Limited Support</p>
                            </li>
                        </ul>
                        <div class="price-btn">
                            <a href="user-form.html" class="btn btn-inline">
                                <i class="fas fa-sign-in-alt"></i>
                                <span>Register Now</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="price-card price-active">
                        <div class="price-head">
                            <i class="flaticon-car-wash"></i>
                            <h3>$23</h3>
                            <h4>Standard Plan</h4>
                        </div>
                        <ul class="price-list">
                            <li>
                                <i class="fas fa-plus"></i>
                                <p>1 Recom Ad for 30 days</p>
                            </li>
                            <li>
                                <i class="fas fa-times"></i>
                                <p>No Featured Ad Available</p>
                            </li>
                            <li>
                                <i class="fas fa-times"></i>
                                <p>No Ad will be bumped up</p>
                            </li>
                            <li>
                                <i class="fas fa-times"></i>
                                <p>No Top Ad Available</p>
                            </li>
                            <li>
                                <i class="fas fa-plus"></i>
                                <p>Basic Support</p>
                            </li>
                        </ul>
                        <div class="price-btn">
                            <a href="user-form.html" class="btn btn-inline">
                                <i class="fas fa-sign-in-alt"></i>
                                <span>Register Now</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="price-card">
                        <div class="price-head">
                            <i class="flaticon-airplane"></i>
                            <h3>$49</h3>
                            <h4>Premium Plan</h4>
                        </div>
                        <ul class="price-list">
                            <li>
                                <i class="fas fa-plus"></i>
                                <p>1 Featured Ad for 60 days</p>
                            </li>
                            <li>
                                <i class="fas fa-plus"></i>
                                <p>Access to All features</p>
                            </li>
                            <li>
                                <i class="fas fa-plus"></i>
                                <p>With Recommended</p>
                            </li>
                            <li>
                                <i class="fas fa-plus"></i>
                                <p>Ad Top Category</p>
                            </li>
                            <li>
                                <i class="fas fa-plus"></i>
                                <p>Priority Support</p>
                            </li>
                        </ul>
                        <div class="price-btn">
                            <a href="user-form.html" class="btn btn-inline">
                                <i class="fas fa-sign-in-alt"></i>
                                <span>Register Now</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                 PRICE PART END
    =======================================-->


    <!--=====================================
                 BLOG PART START
    =======================================-->
    <section class="blog-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-center-heading">
                        <h2>Read Our <span>Recent Articles</span></h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit aspernatur illum vel sunt libero
                            voluptatum repudiandae veniam maxime tenetur.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-slider slider-arrow">
                        <div class="blog-card">
                            <div class="blog-img">
                                <img src="images/blog/01.jpg" alt="blog">
                                <div class="blog-overlay">
                                    <span class="marketing">Marketing</span>
                                </div>
                            </div>
                            <div class="blog-content">
                                <a href="#" class="blog-avatar">
                                    <img src="images/avatar/01.jpg" alt="avatar">
                                </a>
                                <ul class="blog-meta">
                                    <li>
                                        <i class="fas fa-user"></i>
                                        <p><a href="#">MironMahmud</a></p>
                                    </li>
                                    <li>
                                        <i class="fas fa-clock"></i>
                                        <p>02 Feb 2021</p>
                                    </li>
                                </ul>
                                <div class="blog-text">
                                    <h4><a href="blog-details.html">Lorem ipsum dolor sit amet eius minus elit cum
                                            quaerat volupt.</a></h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus veniam ad
                                        dolore labore laborum perspiciatis...</p>
                                </div>
                                <a href="blog-details.html" class="blog-read">
                                    <span>read more</span>
                                    <i class="fas fa-long-arrow-alt-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="blog-card">
                            <div class="blog-img">
                                <img src="images/blog/02.jpg" alt="blog">
                                <div class="blog-overlay">
                                    <span class="advertise">advertise</span>
                                </div>
                            </div>
                            <div class="blog-content">
                                <a href="#" class="blog-avatar">
                                    <img src="images/avatar/02.jpg" alt="avatar">
                                </a>
                                <ul class="blog-meta">
                                    <li>
                                        <i class="fas fa-user"></i>
                                        <p><a href="#">LabonnoKhan</a></p>
                                    </li>
                                    <li>
                                        <i class="fas fa-clock"></i>
                                        <p>02 Feb 2021</p>
                                    </li>
                                </ul>
                                <div class="blog-text">
                                    <h4><a href="blog-details.html">Lorem ipsum dolor sit amet eius minus elit cum
                                            quaerat volupt.</a></h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus veniam ad
                                        dolore labore laborum perspiciatis...</p>
                                </div>
                                <a href="blog-details.html" class="blog-read">
                                    <span>read more</span>
                                    <i class="fas fa-long-arrow-alt-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="blog-card">
                            <div class="blog-img">
                                <img src="images/blog/03.jpg" alt="blog">
                                <div class="blog-overlay">
                                    <span class="safety">safety</span>
                                </div>
                            </div>
                            <div class="blog-content">
                                <a href="#" class="blog-avatar">
                                    <img src="images/avatar/03.jpg" alt="avatar">
                                </a>
                                <ul class="blog-meta">
                                    <li>
                                        <i class="fas fa-user"></i>
                                        <p><a href="#">MironMahmud</a></p>
                                    </li>
                                    <li>
                                        <i class="fas fa-clock"></i>
                                        <p>02 Feb 2021</p>
                                    </li>
                                </ul>
                                <div class="blog-text">
                                    <h4><a href="blog-details.html">Lorem ipsum dolor sit amet eius minus elit cum
                                            quaerat volupt.</a></h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus veniam ad
                                        dolore labore laborum perspiciatis...</p>
                                </div>
                                <a href="blog-details.html" class="blog-read">
                                    <span>read more</span>
                                    <i class="fas fa-long-arrow-alt-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="blog-card">
                            <div class="blog-img">
                                <img src="images/blog/04.jpg" alt="blog">
                                <div class="blog-overlay">
                                    <span class="security">security</span>
                                </div>
                            </div>
                            <div class="blog-content">
                                <a href="#" class="blog-avatar">
                                    <img src="images/avatar/04.jpg" alt="avatar">
                                </a>
                                <ul class="blog-meta">
                                    <li>
                                        <i class="fas fa-user"></i>
                                        <p><a href="#">TahminaBonny</a></p>
                                    </li>
                                    <li>
                                        <i class="fas fa-clock"></i>
                                        <p>02 Feb 2021</p>
                                    </li>
                                </ul>
                                <div class="blog-text">
                                    <h4><a href="blog-details.html">Lorem ipsum dolor sit amet eius minus elit cum
                                            quaerat volupt.</a></h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus veniam ad
                                        dolore labore laborum perspiciatis...</p>
                                </div>
                                <a href="blog-details.html" class="blog-read">
                                    <span>read more</span>
                                    <i class="fas fa-long-arrow-alt-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-btn">
                        <a href="blog-list.html" class="btn btn-inline">
                            <i class="fas fa-eye"></i>
                            <span>view all blogs</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                 BLOG PART END
    =======================================-->
@endsection
