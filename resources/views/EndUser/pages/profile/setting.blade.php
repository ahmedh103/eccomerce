<!DOCTYPE html>
<html lang="en">
<head>
    <!--=====================================
                META-TAG PART START
    =======================================-->
    <!-- REQUIRE META -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- AUTHOR META -->
    <meta name="author" content="Mironcoder">
    <meta name="email" content="mironcoder@gmail.com">
    <meta name="profile" content="https://themeforest.net/user/mironcoder">

    <!-- TEMPLATE META -->
    <meta name="name" content="Classicads">
    <meta name="type" content="Classified Advertising">
    <meta name="title" content="Classicads - Classified Ads HTML Template">
    <meta name="keywords" content="classicads, classified, ads, classified ads, listing, business, directory, jobs, marketing, portal, advertising, local, posting, ad listing, ad posting,">
    <!--=====================================
                META-TAG PART END
    =======================================-->

    <!-- FOR WEBPAGE TITLE -->
    <title>Setting - Classicads</title>

    <!--=====================================
                CSS LINK PART START
    =======================================-->
    <!-- FAVICON -->
    <link rel="icon" href="images/favicon.png">

    <!-- FONTS -->
  @include('EndUser.Includes.head')
    <link rel="stylesheet" href="{{asset('assetsEndUser/css/custom/setting.css')}}">
    <!--=====================================
                CSS LINK PART END
    =======================================-->
</head>
<body>
<!--=====================================
            HEADER PART START
=======================================-->
@include('EndUser.Includes.nav')
<!--=====================================
            HEADER PART END
=======================================-->


<!--=====================================
            SIDEBAR PART START
=======================================-->
@include('EndUser.Includes.sidebar')
<!--=====================================
            SIDEBAR PART END
=======================================-->


<!--=====================================
            MOBILE-NAV PART START
=======================================-->
<nav class="mobile-nav">
    <div class="container">
        <div class="mobile-group">
            <a href="index.html" class="mobile-widget">
                <i class="fas fa-home"></i>
                <span>home</span>
            </a>
            <a href="user-form.html" class="mobile-widget">
                <i class="fas fa-user"></i>
                <span>join me</span>
            </a>
            <a href="ad-post.html" class="mobile-widget plus-btn">
                <i class="fas fa-plus"></i>
                <span>Ad Post</span>
            </a>
            <a href="notification.html" class="mobile-widget">
                <i class="fas fa-bell"></i>
                <span>notify</span>
                <sup>0</sup>
            </a>
            <a href="message.html" class="mobile-widget">
                <i class="fas fa-envelope"></i>
                <span>message</span>
                <sup>0</sup>
            </a>
        </div>
    </div>
</nav>
<!--=====================================
            MOBILE-NAV PART END
=======================================-->


<!--=====================================
          SINGLE BANNER PART START
=======================================-->
<section class="single-banner dashboard-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="single-content">
                    <h2>setting</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">setting</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=====================================
          SINGLE BANNER PART END
=======================================-->


<!--=====================================
        DASHBOARD HEADER PART START
=======================================-->
<section class="dash-header-part">
    <div class="container">
        <div class="dash-header-card">
            <div class="row">
                <div class="col-lg-5">
                    <div class="dash-header-left">
                        <div class="dash-avatar">
                            <a href="#"><img src="{{asset($profile->image)}}" alt="avatar"></a>
                        </div>
                        <div class="dash-intro">
                            <h4><a href="#">gackon Honson</a></h4>
                            <h5>new seller</h5>
                            <ul class="dash-meta">
                                <li>
                                    <i class="fas fa-phone-alt"></i>
                                    <span>(123) 000-1234</span>
                                </li>
                                <li>
                                    <i class="fas fa-envelope"></i>
                                    <span>gackon@gmail.com</span>
                                </li>
                                <li>
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>Los Angeles, West America</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="dash-header-right">
                        <div class="dash-focus dash-list">
                            <h2>2433</h2>
                            <p>listing ads</p>
                        </div>
                        <div class="dash-focus dash-book">
                            <h2>2433</h2>
                            <p>total follower</p>
                        </div>
                        <div class="dash-focus dash-rev">
                            <h2>2433</h2>
                            <p>total review</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="dash-header-alert alert fade show">
                        <p>From your account dashboard. you can easily check & view your recent orders, manage your shipping and billing addresses and Edit your password and account details.</p>
                        <button data-dismiss="alert"><i class="fas fa-times"></i></button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="dash-menu-list">
                        <ul>
                            <li><a href="dashboard.html">dashboard</a></li>
                            <li><a href="{{route('endUser.profile.index')}}">Profile</a></li>
                            <li><a href="ad-post.html">ad post</a></li>
                            <li><a href="my-ads.html">my ads</a></li>
                            <li><a class="active" href="{{route('endUser.profile.setting.index')}}">settings</a></li>
                            <li><a href="bookmark.html">bookmarks</a></li>
                            <li><a href="message.html">message</a></li>
                            <li><a href="notification.html">notification</a></li>
                            <li><a href="user-form.html">logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=====================================
        DASHBOARD HEADER PART END
=======================================-->


<!--=====================================
            SETTING PART START
=======================================-->
<div class="setting-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="account-card alert fade show">
                    <div class="account-title">
                        <h3>Edit Profile</h3>
                        <button data-dismiss="alert">close</button>
                    </div>
                    <form class="setting-form" method="post" enctype="multipart/form-data" action="{{route('endUser.profile.setting.update')}}">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label">First Name</label>
                                    @if($errors->has('first_name'))
                                        <span class="text-danger">{{$errors->first('first_name')}}</span>
                                    @endif

                                    <input type="text" class="form-control" value="{{$profile->first_name}}"  name="first_name" placeholder="FirstName">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label">Last Name</label>
                                    @if($errors->has('last_name'))
                                        <span class="text-danger">{{$errors->first('last_name')}}</span>
                                    @endif

                                    <input type="text" class="form-control" value="{{$profile->last_name}}"  name="last_name" placeholder="Hasan">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Company</label>
                                    <input type="text" class="form-control" value="{{$profile->company}}" name="company" placeholder="Classicads Advertising LID.">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Address</label>
                                    @if($errors->has('address'))
                                        <span class="text-danger">{{$errors->first('address')}}</span>
                                    @endif

                                    <input type="text" class="form-control"  value="{{$profile->address}}" name="address" placeholder="1420, West Jalkuri, Narayanganj, Bangladesh">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label">City</label>
                                    @if($errors->has('city'))
                                        <span class="text-danger">{{$errors->first('city')}}</span>
                                    @endif
                                    <input type="text" class="form-control"  {{$profile->city}} name="city" placeholder="Narayanganj">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label">State</label>
                                    @if($errors->has('state'))
                                        <span class="text-danger">{{$errors->first('state')}}</span>
                                    @endif
                                    <input type="text" class="form-control" name="state" value="{{$profile->state}}" placeholder="West Jalkuri">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label">Post Code</label>
                                    <input type="text" class="form-control"  name="post_code"  value="{{$profile->post_code}}" placeholder="1420">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label">Country</label>
                                    @if($errors->has('country'))
                                        <span class="text-danger">{{$errors->first('country')}}</span>
                                    @endif

                                    <input type="text" class="form-control" name="country" value="{{$profile->country}}" placeholder="Bangladesh">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label">Website</label>
                                    <input type="text" class="form-control" name="website" value="{{$profile->website}}" placeholder="https://mironmahmud.com">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label">Phone</label>
                                    @if($errors->has('phone'))
                                        <span class="text-danger">{{$errors->first('phone')}}</span>
                                    @endif
                                    <input type="text" class="form-control"  name="phone" value="{{$profile->phone}}" placeholder="+8801838288389">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label">Birthday</label>
                                    @if($errors->has('birth'))
                                        <span class="text-danger">{{$errors->first('birth')}}</span>
                                    @endif
                                    <input type="date" class="form-control"   name="birth" value="{{$profile->birth}}" >
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label">Profile Image</label>
                                    <input type="file" name="image" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button class="btn btn-inline">
                                    <i class="fas fa-user-check"></i>
                                    <span>update profile</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--=====================================
            SETTING PART END
=======================================-->


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
<!--=====================================
           LANGUAGE MODAL PART END
=======================================-->


<!--=====================================
            JS LINK PART START
=======================================-->
<!-- VENDOR -->
@include('EndUser.Includes.footer')
<!--=====================================
            JS LINK PART END
=======================================-->
</body>
</html>





