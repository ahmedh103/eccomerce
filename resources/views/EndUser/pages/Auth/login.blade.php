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
                <li><a href="#login-tab" class="nav-link active">sign in</a></li>
                <li><a href="{{route('register')}}" class="nav-link" >sign up</a></li>
            </ul>
        </div>

        <div class="tab-pane active" id="login-tab">
            <div class="user-form-title">
                <h2>Welcome!</h2>
                <p>Use credentials to access your account.</p>
            </div>
            <form method="post" action="{{route('login')}}">
                @csrf
                <div class="row">
                    @if(session()->has('invalid'))
                        <div class="alert alert-danger">
                            {{ session()->get('invalid') }}
                        </div>
                    @endif
                    <div class="col-12">
                        <div class="form-group">
                            @error('email')
                            <div class="alert alert-danger mt-1" role="alert">
                                <h4 class="alert-heading">Alert Danger</h4>
                                <div class="alert-body">
                                    {{ $message }}
                                </div>
                            </div>
                            @enderror
                            <input type="text" name="email" class="form-control" placeholder="email">
                            <small class="form-alert">Please follow this example  example@example.com</small>

                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" id="pass" placeholder="Password">
                            <button type="button" class="form-icon"><i class="eye fas fa-eye"></i></button>
                            <small class="form-alert">Password must be 6 characters</small>
                            @error('password')
                            <div class="alert alert-danger mt-1" role="alert">
                                <h4 class="alert-heading">Alert Danger</h4>
                                <div class="alert-body">
                                    {{ $message }}
                                </div>
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input"  name="remember" id="signin-check">
                                <label class="custom-control-label" for="signin-check">Remember me</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group text-right">
                            <a href="#" class="form-forgot">Forgot password?</a>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-inline">
                                <i class="fas fa-unlock"></i>
                                <span>Enter your account</span>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
            <div class="user-form-direction">
                <p>Don't have an account? click on the <span>( sign up )</span> button above.</p>
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






