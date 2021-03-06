<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>Summit Climb| Dashboard</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="shortcut icon" href="{{ asset('favicon.png') }}">
        <link href="" rel="stylesheet" type="text/css">
       
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body class="hold-transition skin-black-light sidebar-mini fixed">
        <div class="wrapper">


            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">


                <!-- Main content -->
                <section class="content">

                    @yield('content')

                </section>
                <!-- /.content -->

            </div>
            <!-- /.content-wrapper -->

            @include('dashboard.partials.footer')

        </div>
        <!-- ./wrapper -->


<script type="text/javascript">
    var APP_URL = '{{ url('/') }}';
</script>

        @yield('scripts')
    </body>
</html>
