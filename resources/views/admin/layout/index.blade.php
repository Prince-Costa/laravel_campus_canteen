<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Campus Canteen</title>

    <!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="{{ asset('global_assets/css/icons/icomoon/styles.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/bootstrap_limitless.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/layout.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/components.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/colors.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Core JS files -->
    <script src="{{ asset('global_assets/js/main/jquery.min.js')}}"></script>
    <script src="{{ asset('global_assets/js/main/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('global_assets/js/plugins/loaders/blockui.min.js')}}"></script>
    <script src="{{ asset('global_assets/js/plugins/ui/ripple.min.js')}}"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="{{ asset('global_assets/js/plugins/visualization/d3/d3.min.js')}}"></script>
    <script src="{{ asset('global_assets/js/plugins/visualization/d3/d3_tooltip.js')}}"></script>
    <script src="{{ asset('global_assets/js/plugins/forms/styling/switchery.min.js')}}"></script>
    <script src="{{ asset('global_assets/js/plugins/ui/moment/moment.min.js')}}"></script>
    <script src="{{ asset('global_assets/js/plugins/pickers/daterangepicker.js')}}"></script>

    <script src="assets/js/app.js"></script>
    <script src="{{ asset('global_assets/js/demo_pages/dashboard.js')}}"></script>
    <script src="{{ asset('global_assets/js/demo_charts/pages/dashboard/light/streamgraph.js')}}"></script>
    <script src="{{ asset('global_assets/js/demo_charts/pages/dashboard/light/sparklines.js')}}"></script>
    <script src="{{ asset('global_assets/js/demo_charts/pages/dashboard/light/lines.js')}}"></script>
    <script src="{{ asset('global_assets/js/demo_charts/pages/dashboard/light/areas.js')}}"></script>
    <script src="{{ asset('global_assets/js/demo_charts/pages/dashboard/light/donuts.js')}}"></script>
    <script src="{{ asset('global_assets/js/demo_charts/pages/dashboard/light/bars.js')}}"></script>
    <script src="{{ asset('global_assets/js/demo_charts/pages/dashboard/light/progress.js')}}"></script>
    <script src="{{ asset('global_assets/js/demo_charts/pages/dashboard/light/heatmaps.js')}}"></script>
    <script src="{{ asset('global_assets/js/demo_charts/pages/dashboard/light/pies.js')}}"></script>
    <script src="{{ asset('global_assets/js/demo_charts/pages/dashboard/light/bullets.js')}}"></script>


    <!--    For Radio Checkbox-->
    <script src="{{ asset('global_assets/js/demo_pages/form_checkboxes_radios.js')}}"></script>
    <!-- /theme JS files -->

</head>

<body>

    @include('admin.layout.nav.top_nav')


    <!-- Page content -->
    <div class="page-content">

        <!-- Main sidebar -->
        <div class="sidebar sidebar-light sidebar-main sidebar-expand-md">

            <!-- Sidebar mobile toggler -->
            <div class="sidebar-mobile-toggler text-center">
                <a href="#" class="sidebar-mobile-main-toggle">
                    <i class="icon-arrow-left8"></i>
                </a>
                <span class="font-weight-semibold">Navigation</span>
                <a href="#" class="sidebar-mobile-expand">
                    <i class="icon-screen-full"></i>
                    <i class="icon-screen-normal"></i>
                </a>
            </div>
            <!-- /sidebar mobile toggler -->


            <!-- Sidebar content -->
            <div class="sidebar-content">

               @include('admin.layout.partials.user_oparetions_and_avatar')


                <!-- Main navigation -->

				@include('admin.layout.nav.main_side_nav')
				<!-- /main navigation -->

            </div>
            <!-- /sidebar content -->

        </div>
        <!-- /main sidebar -->


        <!-- Main content -->
        <div class="content-wrapper">

           @include('admin.layout.nav.page_header')

            @yield('content')


            @include('admin.layout.partials.footer')
        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</body>

</html>
