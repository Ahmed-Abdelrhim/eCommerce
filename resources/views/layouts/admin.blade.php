<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="{{app()->getLocale() === 'ar' ? 'rtl' : 'ltr'}}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
          content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords"
          content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title>@yield('title')</title>
    <link rel="apple-touch-icon" href="{{asset('assets/admin/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/admin/images/ico/favicon.ico')}}">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
        rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
          rel="stylesheet">
    {{--    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css-rtl/plugins/animate/animate.css')}}">--}}
    <link rel="stylesheet" type="text/css"
          href="{{asset('assets/admin/'.getCssFile().'/plugins/animate/animate.css')}}">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/'.getCssFile().'/vendors.css')}}">

    {{--  ######################################################################  --}}
    <link rel="stylesheet" type="text/css"
          href="{{asset('assets/admin/vendors/'.getCssFile().'/weather-icons/climacons.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/fonts/meteocons/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/vendors/'.getCssFile().'/charts/morris.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('assets/admin/vendors/'.getCssFile().'/charts/chartist.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('assets/admin/vendors/'.getCssFile().'/forms/selects/select2.min.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('assets/admin/vendors/'.getCssFile().'/charts/chartist-plugin-tooltip.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('assets/admin/vendors/css/forms/toggle/bootstrap-switch.min.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('assets/admin/vendors/'.getCssFile().'/forms/toggle/switchery.min.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('assets/admin/'.getCssFile().'/core/menu/menu-types/vertical-menu.css')}}">

    {{--  ######################################################################  --}}

    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/'.getCssFile().'/pages/chat-application.css')}}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN MODERN CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/'.getCssFile().'/app.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/'.getCssFile().'/custom-rtl.css')}}">
    <!-- END MODERN CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css"
          href="{{asset('assets/admin/'.getCssFile().'/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('assets/admin/'.getCssFile().'/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/fonts/simple-line-icons/style.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('assets/admin/'.getCssFile().'/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/'.getCssFile().'/pages/timeline.css')}}">
    {{--  ######################################################################  --}}

    <link rel="stylesheet" type="text/css"
          href="{{asset('assets/admin/vendors/'.getCssFile().'/cryptocoins/cryptocoins.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('assets/admin/vendors/'.getCssFile().'/extensions/datedropper.min.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('assets/admin/vendors/'.getCssFile().'/extensions/timedropper.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/admin/css-rtl/plugins/file-uploaders/dropzone.css')}}">
    {{--  ######################################################################  --}}

<!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/'.getCssFile().'/style-rtl.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/style.css')}}">
    <!-- END Custom CSS-->
    {{--    @notify_css--}}
    @yield('style')
    {{--    <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">--}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,200;1,300;1,400;1,500;1,700;1,800&display=swap"
        rel="stylesheet">
    {{--Font Awesome --}}
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    {{--Font Awesome --}}

    <style>
        body {
            font-family: 'Nunito', 'Cairo', sans-serif;
        }
    </style>
</head>
<body class="vertical-layout vertical-menu 2-columns  menu-expanded fixed-navbar"
      {{--@if(Request::is('admin/users/tickets/reply*')) chat-application @endif--}}
      data-open="click" data-menu="vertical-menu" data-col="2-columns">
<!-- fixed-top-->
@include('dashboard.includes.header')
<!-- ////////////////////////////////////////////////////////////////////////////-->
@include('dashboard.includes.sidebar')

@yield('content')
<!-- ////////////////////////////////////////////////////////////////////////////-->
@include('dashboard.includes.footer')

{{--@notify_js--}}
{{--@notify_render--}}

<!-- BEGIN VENDOR JS-->
<script src="{{asset('assets/admin/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<script src="{{asset('assets/admin/vendors/js/tables/datatable/datatables.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('assets/admin/vendors/js/tables/datatable/dataTables.buttons.min.js')}}"
        type="text/javascript"></script>

<script src="{{asset('assets/admin/vendors/js/forms/toggle/bootstrap-switch.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('assets/admin/vendors/js/forms/toggle/bootstrap-checkbox.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('assets/admin/vendors/js/forms/toggle/switchery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/admin/js/scripts/forms/switch.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/admin/vendors/js/forms/select/select2.full.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/admin/js/scripts/forms/select/form-select2.js')}}" type="text/javascript"></script>

<!-- BEGIN PAGE VENDOR JS-->
<script src="{{asset('assets/admin/vendors/js/charts/chart.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/admin/vendors/js/charts/echarts/echarts.js')}}" type="text/javascript"></script>

<script src="{{asset('assets/admin/vendors/js/extensions/datedropper.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/admin/vendors/js/extensions/timedropper.min.js')}}" type="text/javascript"></script>

<script src="{{asset('assets/admin/vendors/js/forms/icheck/icheck.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/admin/js/scripts/pages/chat-application.js')}}" type="text/javascript"></script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN MODERN JS-->
<script src="{{asset('assets/admin/js/core/app-menu.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/admin/js/core/app.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/admin/js/scripts/customizer.js')}}" type="text/javascript"></script>
<!-- END MODERN JS-->
<!-- BEGIN PAGE LEVEL JS-->
<script src="{{asset('assets/admin/js/scripts/pages/dashboard-crypto.js')}}" type="text/javascript"></script>


<script src="{{asset('assets/admin/js/scripts/tables/datatables/datatable-basic.js')}}"
        type="text/javascript"></script>
<script src="{{asset('assets/admin/js/scripts/extensions/date-time-dropper.js')}}" type="text/javascript"></script>
<!-- END PAGE LEVEL JS-->

<script src="{{asset('assets/admin/js/scripts/forms/checkbox-radio.js')}}" type="text/javascript"></script>

<script src="{{asset('assets/admin/js/scripts/modal/components-modal.js')}}" type="text/javascript"></script>
{{--<script src="{{asset('assets/admin/vendors/js/extensions/dropzone.min.ls')}}"></script>--}}
<script src="{{asset('assets/admin/vendors/js/extensions/dropzone.min.js')}}"></script>

<script>
    $('#meridians1').timeDropper({
        meridians: true,
        setCurrentTime: false
    });
    $('#meridians2').timeDropper({
        meridians: true, setCurrentTime: false

    });
    $('#meridians3').timeDropper({
        meridians: true,
        setCurrentTime: false
    });
    $('#meridians4').timeDropper({
        meridians: true,
        setCurrentTime: false
    });
    $('#meridians5').timeDropper({
        meridians: true, setCurrentTime: false

    });
    $('#meridians6').timeDropper({
        meridians: true, setCurrentTime: false
    });
    $('#meridians7').timeDropper({
        meridians: true, setCurrentTime: false
    });
    $('#meridians8').timeDropper({
        meridians: true, setCurrentTime: false
    });
    $('#meridians9').timeDropper({
        meridians: true, setCurrentTime: false
    });
    $('#meridians10').timeDropper({
        meridians: true, setCurrentTime: false
    });
    $('#meridians11').timeDropper({
        meridians: true, setCurrentTime: false
    });
    $('#meridians12').timeDropper({
        meridians: true, setCurrentTime: false
    });
    $('#meridians13').timeDropper({
        meridians: true, setCurrentTime: false
    });
    $('#meridians14').timeDropper({
        meridians: true, setCurrentTime: false
    });
</script>
@yield('script')
</body>
</html>
