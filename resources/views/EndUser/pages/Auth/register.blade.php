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
    <title>Classicads - User Form</title>

    <!--=====================================
                CSS LINK PART START
    =======================================-->
    <!-- FOR PAGE TITLE ICON -->
    <link rel="icon" href="{{asset('assetsEndUser/images/favicon.png')}}">

    <!-- FOR FONTAWESOME -->
    <link rel="stylesheet" href="{{asset('assetsEndUser/fonts/font-awesome/fontawesome.css')}}">

    <!-- FOR BOOTSTRAP -->
    <link rel="stylesheet" href="{{asset('assetsEndUser/css/vendor/bootstrap.min.css')}}">

    <!-- FOR COMMON STYLE -->
    <link rel="stylesheet" href="{{asset('assetsEndUser/css/custom/main.css')}}">

    <!-- FOR USER FORM PAGE STYLE -->
    <link rel="stylesheet" href="{{asset('assetsEndUser/css/custom/user-form.css')}}">
    <!--=====================================
                CSS LINK PART END
    =======================================-->
</head>
<body>
<!--=====================================
            USER-FORM PART START
=======================================-->
<section class="user-form-part">
    <div class="user-form-banner">
        <div class="user-form-content">
            <a href="#"><img src="{{asset('assetsEndUser/images/logo.png')}}" alt="logo"></a>
            <h1>Advertise your assets <span>Buy what are you needs.</span></h1>
            <p>Biggest Online Advertising Marketplace in the World.</p>
        </div>
    </div>

    <div class="user-form-category">
        <div class="user-form-header">
            <a href="#"><img src="{{asset('assetsEndUser/images/logo.png')}}" alt="logo"></a>
            <a href="index.html"><i class="fas fa-arrow-left"></i></a>
        </div>
        <div class="user-form-category-btn">
            <ul class="nav nav-tabs">
                <li><a href="{{route('login')}}" class="nav-link" >sign in</a></li>
                <li><a href="#register-tab" class="nav-link active" >sign up</a></li>
            </ul>
        </div>

        <div class="tab-pane  active" id="register-tab">
            <div class="user-form-title">
                <h2>Register</h2>
                <p>Setup a new account in a minute.</p>
            </div>
            <ul class="user-form-option">
                <li>
                    <a href="#">
                        <i class="fab fa-facebook-f"></i>
                        <span>facebook</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fab fa-twitter"></i>
                        <span>twitter</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fab fa-google"></i>
                        <span>google</span>
                    </a>
                </li>
            </ul>
            <div class="user-form-devider">
                <p>or</p>
            </div>
            <form method="post" action="{{route('register')}}">
                @csrf
                <div class="row">

                    <div class="col-12">
                        <div class="form-group">
                            <input type="text" class="form-control"  name="email" placeholder="email">
                            <small class="form-alert">Please follow this example - example@example.com</small>
                            @error('email')
                            <div class="alert alert-danger mt-1" role="alert">
                                <h4 class="alert-heading">Alert Danger</h4>
                                <div class="alert-body">
                                    {{ $message }}
                                </div>
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <input type="text" class="form-control"  name="phone" placeholder="Phone number">
                            <small class="form-alert">Please follow this example - 01XXXXXXXXX</small>
                            @error('phone')
                            <div class="alert alert-danger mt-1" role="alert">
                                <h4 class="alert-heading">Alert Danger</h4>
                                <div class="alert-body">
                                    {{ $message }}
                                </div>
                            </div>
                            @enderror
                        </div>
                    </div>
                    {{--                    first_name--}}
                    <div class="col-12">
                        <div class="form-group">
                            @error('first_name')
                            <div class="alert alert-danger mt-1" role="alert">
                                <h4 class="alert-heading">Alert Danger</h4>
                                <div class="alert-body">
                                    {{ $message }}
                                </div>
                            </div>
                            @enderror
                            <input type="text" class="form-control"  name="first_name" placeholder="First Name">
                            <small class="form-alert">Please follow this example - 01XXXXXXXXX</small>

                        </div>
                    </div>
                    {{--                    last_name--}}
                    <div class="col-12">
                        <div class="form-group">
                            @error('last_name')
                            <div class="alert alert-danger mt-1" role="alert">
                                <h4 class="alert-heading">Alert Danger</h4>
                                <div class="alert-body">
                                    {{ $message }}
                                </div>
                            </div>
                            @enderror

                            <input type="text" class="form-control"  name="last_name" placeholder="Last Name">
                            <small class="form-alert">Please follow this example - 01XXXXXXXXX</small>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            @error('password')
                            <div class="alert alert-danger mt-1" role="alert">
                                <h4 class="alert-heading">Alert Danger</h4>
                                <div class="alert-body">
                                    {{ $message }}
                                </div>
                            </div>
                            @enderror
                            <input type="password"   class="form-control" name="password" placeholder="Password">
                            <a class="form-icon"><i class="eye fas fa-eye"></i></a>
                            <small class="form-alert">Password must be 6 characters</small>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <input type="password"  name="password_confirmation" class="form-control" placeholder="Repeat Password">
                            <button type="button" class="form-icon"><i class="eye fas fa-eye"></i></button>
                            <small class="form-alert">Password must be 6 characters</small>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox"  class="custom-control-input" id="signup-check">
                                <label class="custom-control-label" for="signup-check">I agree to the all <a href="#">terms & consitions</a> of bebostha.</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-inline">
                                <i class="fas fa-user-check"></i>
                                <span>Create new account</span>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
            <div class="user-form-direction">
                <p>Already have an account? click on the <span>( sign in )</span> button above.</p>
            </div>
        </div>



    </div>
</section>
<!--=====================================
            USER-FORM PART END
=======================================-->


<!--=====================================
            JS LINK PART START
=======================================-->
<!-- FOR BOOTSTRAP -->
<script src="{{asset('assetsEndUser/js/vendor/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('assetsEndUser/js/vendor/popper.min.js')}}"></script>
<script src="{{asset('assetsEndUser/js/vendor/bootstrap.min.js')}}"></script>

<!-- FOR INTERACTION -->
<script src="{{asset('assetsEndUser/js/custom/main.js')}}"></script>
<script>
    // switch form login to signup form and vice versa by clicking on the button above the form box

</script>
<!--=====================================
            JS LINK PART END
=======================================-->
</body>
</html>






