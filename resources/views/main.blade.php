<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang="it"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Casa di Cura Nobili è un presidio ospedaliero polispecialistico di eccellenza in Emilia Romagna.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Casa di Cura Nobili | @yield('title')</title>

    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#859cc9">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#2d3e50">

    <link rel="apple-touch-icon" href="{{ url('apple-touch-icon.png') }}">
    <link rel="stylesheet" href="{{ url('css/template/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/template/bootstrap-datetimepicker.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/template/normalize.css') }}">
    <link rel="stylesheet" href="{{ url('css/template/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/template/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ url('css/template/prettyPhoto.css') }}">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <link rel="stylesheet" href="{{ url('css/template/color.css') }}">
    <link rel="stylesheet" href="{{ url('css/template/responsive.css') }}">
    <link rel="stylesheet" href="{{ url('css/template/transitions.css') }}">
    <link rel="stylesheet" href="{{ url('css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ url('css/jquery.fancybox.min.css') }}" media="screen">
    <link rel="stylesheet" href="{{ url('css/custom.css') }}">
    <script src="{{ url('js/template/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>
</head>

<body @if(Route::getCurrentRoute()->uri() == '/') class="th-home" @endif >
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!--************************************
        Wrapper Start
*************************************-->
<div id="th-wrapper" class="th-wrapper th-haslayout">

    @include('header')

    @yield('content')

    @include('footer')

</div>
<!--************************************
        Wrapper End
*************************************-->
@include('appointment')

<script src="{{ url('js/template/vendor/jquery-library.js') }}"></script>
<script src="{{ url('js/template/vendor/jquery-ui.min.js') }}"></script>
<script src="{{ url('js/template/vendor/bootstrap.min.js') }}"></script>
<script src="{{ url('js/template/moment-with-locales.js') }}"></script>
<script src="{{ url('js/template/bootstrap-datetimepicker.min.js') }}"></script>
<script src="https://maps.google.com/maps/api/js?key={{ env('GOOGLE_API_KEY') }}&language=en"></script>
<script src="{{ url('js/template/owl.carousel.min.js') }}"></script>
<script src="{{ url('js/template/finalcountdown.js') }}"></script>
<script src="{{ url('js/template/jquery.countTo.js') }}"></script>
<script src="{{ url('js/template/isotope.pkgd.js') }}"></script>
<script src="{{ url('js/template/parallax.min.js') }}"></script>
<script src="{{ url('js/template/prettyPhoto.js') }}"></script>
<script src="{{ url('js/template/appear.js') }}"></script>
<script src="{{ url('/js/template/gmap3.js') }}"></script>
<script src="{{ url('js/template/themefunction.js') }}"></script>
<script src="{{ url('js/jquery.newsTicker.min.js') }}"></script>
<script src="{{ url('js/jquery.fancybox.min.js') }}"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="{{ url('js/custom.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $("#headSearch").autocomplete({
            source: {!! $doctorList !!},
            appendTo: $("#headSearch").next(),
            select: function( event, ui ) {
                $("#docId").val( ui.item.url);
                document.getElementById("appointmentForm").action = '/medici/'+ui.item.url+'/'+ui.item.value.toLowerCase().replace(/\s+/g, '-');
            }
        });
    });
</script>

@yield('scripts')
@yield('extra-css')

</body>
</html>
