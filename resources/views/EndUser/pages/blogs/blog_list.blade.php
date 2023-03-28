@extends('EndUser/Includes/master')

@section('content')
    <section class="single-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single-content">
                        <h2>{{__('user.blog_list')}}</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">{{__('dashboard.home')}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{__('user.blog_list')}}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
              SINGLE BANNER PART END
    =======================================-->


    <!--=========================================
                BLOG LIST PART START
    ===========================================-->
    <section class="blog-part">
        <div class="container">
            <div class="col-lg-12">
                <div class="blog-sidebar">
                    <div class="blog-sidebar-title">
                        <h5>{{__('user.search')}}</h5>
                    </div>
                    <form action="" method="" class="blog-src">

                        <input type="search" id="search" name="search" placeholder="{{__('user.search')}}...">
                        <button type="submit"><i class="fas fa-search"></i></button>
                    </form>
                </div>
            </div>
            <div class="row content-reverse">
                <div class="col-lg-4">
                    <div class="row ">

                        <!-- SEARCH BAR -->


                        <!-- POPULAR POST -->

                        <!-- TOP CATEGORY -->

                        <!-- BEST TAGS -->

                        <!-- FOLLOW US -->
                    </div>
                </div>

                    <div class="row allData">
                        @foreach($blogs as $blog)
                            @if(Auth::user()->id == $blog->user_id)
                        <div class="col-md-4 m-auto">
                            <div class="blog-card">
                                <div class="blog-img">
                                    <img src="{{asset("$blog->image")}}" alt="blog">
                                    <div class="blog-overlay">
                                        <span class="marketing">{{__('user.markting')}}</span>
                                    </div>
                                </div>

                                <div class="blog-content">
                                    <a href="#" class="blog-avatar">
                                        <img src="{{asset("$blog->image")}}" alt="avatar">
                                    </a>
                                    <ul class="blog-meta">
                                        <li>
                                            <i class="fas fa-user"></i>
                                            <p><a href="#">{{$blog->user->first_name}}</a></p>
                                        </li>
                                        <li>
                                            <i class="fas fa-clock"></i>
                                            <p>{{$blog->created_at}}</p>
                                        </li>
                                    </ul>
                                    <div class="blog-text">
                                        <h4><a href="blog-details.html">{{$blog->title}}</a></h4>
                                        <p>{{$blog->description}}</p>
                                    </div>
                                    <a href="{{route('blog.edit',$blog)}}" class="blog-read">
                                        <span>{{__('user.edit_card')}}</span>
                                        <i class="fas fa-long-arrow-alt-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                            @else
                                <div class="alert alert-danger w-100">Sorry, there is no data for you</div>
                            @endif
                        @endforeach
                    </div>
                <div class="row showData" id="content">

                </div>

                </div>
            </div>
    </section>
    <!--=========================================
                    BLOG LIST PART END
    ===========================================-->


    <!--=====================================
                FOOTER PART PART
    =======================================-->
    <footer class="footer-part">
        <div class="container">
            <div class="row newsletter">
                <div class="col-lg-6">
                    <div class="news-content">
                        <h2>Subscribe for Latest Offers</h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam, aliquid reiciendis! Exercitationem soluta provident non.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form class="news-form">
                        <input type="text" placeholder="Enter Your Email Address">
                        <button class="btn btn-inline">
                            <i class="fas fa-envelope"></i>
                            <span>Subscribe</span>
                        </button>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="footer-content">
                        <h3>Contact Us</h3>
                        <ul class="footer-address">
                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                                <p>1420 West Jalkuri Fatullah, <span>Narayanganj, BD</span></p>
                            </li>
                            <li>
                                <i class="fas fa-envelope"></i>
                                <p>support@classicads.com <span>info@classicads.com</span></p>
                            </li>
                            <li>
                                <i class="fas fa-phone-alt"></i>
                                <p>+8801838288389 <span>+8801941101915</span></p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="footer-content">
                        <h3>Quick Links</h3>
                        <ul class="footer-widget">
                            <li><a href="#">Store Location</a></li>
                            <li><a href="#">Orders Tracking</a></li>
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Size Guide</a></li>
                            <li><a href="#">Faq</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="footer-content">
                        <h3>Information</h3>
                        <ul class="footer-widget">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Delivery System</a></li>
                            <li><a href="#">Secure Payment</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Sitemap</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="footer-info">
                        <a href="#"><img src="images/logo.png" alt="logo"></a>
                        <ul class="footer-count">
                            <li>
                                <h5>929,238</h5>
                                <p>Registered Users</p>
                            </li>
                            <li>
                                <h5>242,789</h5>
                                <p>Community Ads</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-card-content">
                        <div class="footer-payment">
                            <a href="#"><img src="images/pay-card/01.jpg" alt="01"></a>
                            <a href="#"><img src="images/pay-card/02.jpg" alt="02"></a>
                            <a href="#"><img src="images/pay-card/03.jpg" alt="03"></a>
                            <a href="#"><img src="images/pay-card/04.jpg" alt="04"></a>
                        </div>
                        <div class="footer-option">
                            <button type="button" data-toggle="modal" data-target="#language"><i class="fas fa-globe"></i>English</button>
                            <button type="button" data-toggle="modal" data-target="#currency"><i class="fas fa-dollar-sign"></i>USD</button>
                        </div>
                        <div class="footer-app">
                            <a href="#"><img src="images/play-store.png" alt="play-store"></a>
                            <a href="#"><img src="images/app-store.png" alt="app-store"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-end">
            <div class="container">
                <div class="footer-end-content">
                    <p>All Copyrights Reserved &copy; 2021 - Developed by <a href="#">Mironcoder</a></p>
                    <ul class="footer-social">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!--=====================================
                FOOTER PART END
    =======================================-->


    <!--=====================================
              CURRENCY MODAL PART START
    =======================================-->
    <div class="modal fade" id="currency">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Choose a Currency</h4>
                    <button class="fas fa-times" data-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <button class="modal-link active">United States Doller (USD) - $</button>
                    <button class="modal-link">Euro (EUR) - €</button>
                    <button class="modal-link">British Pound (GBP) - £</button>
                    <button class="modal-link">Australian Dollar (AUD) - A$</button>
                    <button class="modal-link">Canadian Dollar (CAD) - C$</button>
                </div>
            </div>
        </div>
    </div>
    <!--=====================================
              CURRENCY MODAL PART END
    =======================================-->


    <!--=====================================
              LANGUAGE MODAL PART END
    =======================================-->
    <div class="modal fade" id="language">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Choose a Language</h4>
                    <button class="fas fa-times" data-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <button class="modal-link active">English</button>
                    <button class="modal-link">bangali</button>
                    <button class="modal-link">arabic</button>
                    <button class="modal-link">germany</button>
                    <button class="modal-link">spanish</button>
                </div>
            </div>
        </div>
    </div>


@endsection


