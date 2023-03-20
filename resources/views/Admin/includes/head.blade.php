<link rel="icon" type="image/x-icon" href="{{ asset('assetsAdmin/src/assets/img/favicon.ico') }}"/>
<link href="{{ asset('assetsAdmin/layouts/horizontal-light-menu/css/light/loader.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assetsAdmin/layouts/horizontal-light-menu/css/dark/loader.css') }}" rel="stylesheet" type="text/css" />
<script src="{{ asset('assetsAdmin/layouts/horizontal-light-menu/loader.js') }}"></script>

<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
<link href="{{ asset('assetsAdmin/src/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assetsAdmin/layouts/horizontal-light-menu/css/light/plugins.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assetsAdmin/layouts/horizontal-light-menu/css/dark/plugins.css') }}" rel="stylesheet" type="text/css" />
<!-- END GLOBAL MANDATORY STYLES -->

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
<link href="{{ asset('assetsAdmin/src/plugins/src/apex/apexcharts.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assetsAdmin/src/assets/css/light/dashboard/dash_1.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assetsAdmin/src/assets/css/dark/dashboard/dash_1.css') }}" rel="stylesheet" type="text/css" />

@stack('css')
