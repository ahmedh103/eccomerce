

@extends('EndUser.Includes.master')

@section('title')
{{ __('ads.ad page')}}
@endsection

@section('content')
 

<!DOCTYPE html>

    <body>
  
    
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
                            <h2>ad post</h2>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">ad-post</li>
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
                                    <a href="#"><img src="images/avatar/01.jpg" alt="avatar"></a>
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
                                    <li><a href="profile.html">Profile</a></li>
                                    <li><a class="active" href="ad-post.html">ad post</a></li>
                                    <li><a href="my-ads.html">my ads</a></li>
                                    <li><a href="setting.html">settings</a></li>
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
                    ADPOST PART START
        =======================================-->
        <section class="adpost-part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <form class="adpost-form" action="{{route("endUser.ads.store")}}" method="post" enctype="multipart/form-data" >
                            @csrf
                            <div class="adpost-card">
                                <div class="adpost-title">
                                    <h3>{{__("ads.Ad Information")}}</h3>
                                </div>
                               
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-label"> {{ __('ads.ad_name_in_arabic')}}   </label>
                                            <input type="text" name = "name_ar" class="form-control" value="{{old("name_ar")}}" >
                                        </div>
                                    </div>
                                    @if ($errors->has('name_ar'))
                                    <span class="text-danger">{{ $errors->first('name_ar') }}</span>
                                @endif
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-label"> {{ __('ads.ad_name_in_english')}} </label>
                                            <input type="text" name = "name_en" class="form-control" value="{{old("name_en")}}" >
                                        </div>
                                    </div>
                                    @if ($errors->has('name_en'))
                                    <span class="text-danger">{{ $errors->first('name_en') }}</span>
                                @endif
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label"> {{ __('ads.ad_city')}}  </label>
                                        <input type="text" name = "city" class="form-control" value="{{old("city")}}" >
                                    </div>
                                </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-label">{{ __('ads.ad_image')}}</label>
                                            <input type="file" name = "image"  value="{{old("image")}}"  class="form-control">
                                        </div>
                                    </div>
                                    @if ($errors->has('image'))
                                    <span class="text-danger">{{ $errors->first('image') }}</span>
                                @endif
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-label"> {{ __('ads.ad_description')}} </label>
                                            {{-- <input type="texta" name = "description" value="{{old("name_ar")}}"  class="form-control"> --}}
                                            <textarea name="description" id="" cols="30" rows="10" value="{{old("description")}}"  class="form-control" >
                                            </textarea>
                                        </div>
                                    </div>
                                    @if ($errors->has('description'))
                                    <span class="text-danger">{{ $errors->first('description') }}</span>
                                @endif
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label">{{ __('ads.ad_category')}} </label>
                                            <select class="form-control custom-select" name = "category_id">
                                                <option selected >{{ __('ads.select_category')}} </option>
                
                                                @foreach ($categories as $category)
                                                <option value={{$category->id}}> {{$category->name}}</option>
                                                    
                                                @endforeach
        
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label">{{ __('ads.price')}}</label>
                                            <input type="text" name = "price" class="form-control" >
                                        </div>
                                    </div>
                                    @if ($errors->has('price'))
                                    <span class="text-danger">{{ $errors->first('price') }}</span>
                                @endif
                                  
                                    {{-- <div class="col-md-4 col-lg-4">
                                        <div class="form-group" name = "status">
                                            <ul class="form-check-list" name = "status">
                                                <li>
                                                    <label class="form-label">ad status</label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" class="form-check" id="sale-check">
                                                    <label for="sale-check" class="flat-badge sale">rejected</label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" class="form-check" id="rent-check">
                                                    <label for="rent-check" class="flat-badge rent">approved</label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" class="form-check" id="book-check">
                                                    <label for="book-check" class="flat-badge booking">pending</label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div> --}}         
                                      
                                    {{-- <div class="col-md-4 col-lg-4">
                                        <div class="form-group" name = "type">
                                            <ul class="form-check-list" name = "type">
                                                <li>
                                                    <label class="form-label">ad type </label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" class="form-check" id="use-check">
                                                    <label for="use-check" class="form-check-text">used</label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" class="form-check" id="new-check">
                                                    <label for="new-check" class="form-check-text">new</label>
                                                </li>
                                            </ul>
                                        </div>
                                    
                                    </div> --}}
                                    <select class="form-select col-lg-6" aria-label="Default select example" name ="type">
                                        <option selected>{{__('ads.choose_the_type')}}</option>
                                        <option value="new"> {{__("ads.new")}}</option>
                                        <option value="used"> {{__("ads.used")}}</option>
                                      </select>
                                      
                                       
                        
                                </div>
                            </div>
                                  
                            <br>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary"> {{__("ads.create")}}</button>
                              </div>
            
                                           
                        </form>
                    </div>
                    {{-- <div class="col-lg-4">
                        <div class="account-card alert fade show">
                            <div class="account-title">
                                <h3>Safety Tips</h3>
                                <button data-dismiss="alert">close</button>
                            </div>
                            <ul class="account-card-text">
                                <li>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit debitis odio perferendis placeat at aperiam.</p>
                                </li>
                                <li>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit debitis odio perferendis placeat at aperiam.</p>
                                </li>
                                <li>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit debitis odio perferendis placeat at aperiam.</p>
                                </li>
                                <li>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit debitis odio perferendis placeat at aperiam.</p>
                                </li>
                                <li>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit debitis odio perferendis placeat at aperiam.</p>
                                </li>
                            </ul>
                        </div>
                        <div class="account-card alert fade show">
                            <div class="account-title">
                                <h3>Custom Offer</h3>
                                <button data-dismiss="alert">close</button>
                            </div>
                            <form class="account-card-form">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Message"></textarea>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-inline">
                                        <i class="fas fa-paper-plane"></i>
                                        <span>send Message</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>
        <!--=====================================
                    ADPOST PART END
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






