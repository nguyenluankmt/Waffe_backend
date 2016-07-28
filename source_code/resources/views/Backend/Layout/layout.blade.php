<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
        <title>Metronic | Dashboard 2</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN LAYOUT FIRST STYLES -->
        <link href="//fonts.googleapis.com/css?family=Oswald:400,300,700" rel="stylesheet" type="text/css" />
        <!-- END LAYOUT FIRST STYLES -->
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('Backend/assets/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('Backend/assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('Backend/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet')}}" type="text/css" />
        <link href="{{ URL::asset('Backend/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="{{ URL::asset('Backend/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('Backend/assets/global/plugins/morris/morris.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('Backend/assets/global/plugins/fullcalendar/fullcalendar.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('Backend/assets/global/plugins/jqvmap/jqvmap/jqvmap.css')}}" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="{{ URL::asset('Backend/assets/global/css/components-md.min.css')}}" rel="stylesheet" id="style_components" type="text/css" />
        <link href="{{ URL::asset('Backend/assets/global/css/plugins-md.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="{{ URL::asset('Backend/assets/layouts/layout5/css/layout.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('Backend/assets/layouts/layout5/css/custom.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->
   
    <!-- Custom styling plus plugins -->
    



</head>
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });
</script>

<body class="nav-md">

    <div class="container body">


        <div class="main_container">

            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    @yield('sidebar')
                </div>
            </div>

            <!-- page content -->
            <div class="right_col" role="main">
                <!-- Content -->
                @yield('content')
                <!-- /Content -->

                <!-- footer content -->
                
                <footer>
                    <div class="">
                        <p class="pull-right"> <a><img  class="img-circle" style="position: relative;
    margin-top: -16px;" src="/backend/images/logo1.png" alt=""/> | </a>
                            <span class="lead">VinSofts.com </span>
                        </p>
                    </div>
                    <div class="clearfix"></div>
                </footer>
                <!-- /footer content -->
            </div>
            <!-- /page content -->

        </div>

    </div>
    <a href="javascript:void(0)" class="btn-cancel-upload-img"><i class="fa fa-times"></i></a>
    <style>    
        #example {float: left;}
    </style>

    {!! \Func::createEditor() !!}
    @include('Backend.layout.js_library')
