<script src="{{ asset('assetsEndUser/js/vendor/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('assetsEndUser/js/vendor/popper.min.js') }}"></script>
<script src="{{ asset('assetsEndUser/js/vendor/bootstrap.min.js') }}"></script>
<script src="{{ asset('assetsEndUser/js/vendor/slick.min.js') }}"></script>

<!-- CUSTOM -->
<script src="{{ asset('assetsEndUser/js/custom/slick.js') }}"></script>
<script src="{{ asset('assetsEndUser/js/custom/main.js') }}"></script>
<script src="{{asset("register/js/jquery-3.3.1.min.js")}} "></script>
<script src="{{asset("register/js/main.js")}} "></script>
<script src="{{asset('assetsEndUser/js/search.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js">

@include('sweetalert::alert')
@stack('js')
