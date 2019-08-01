<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Ouvidoria SMEC</title>
    <link href="../theme/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../theme/css/public/style.css" rel="stylesheet">
    <link href="../theme/assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="../theme/css/public/colors/blue.css" id="theme" rel="stylesheet">
    <script src="../theme/assets/plugins/jquery/jquery.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header card-no-border logo-center">
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <div id="main-wrapper">
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">
                        <b>
                                <a href="/" class="m-b-0 text-white"><i class="fa fa-headphones fa-2x"></i> Ouvidoria SMEC</a>
                            
                            {{-- <img src="../material/assets/images/logo-light-icon.png" alt="homepage" class="light-logo" /> --}}
                        </b>
                         {{-- <img src="../material/assets/images/logo-light-text.png" class="light-logo" alt="homepage" /></span> </a> --}}
                </div>
                <div class="navbar-collapse">
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item hidden-sm-down search-box">
                            <a class="nav-link hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i> Acompanhar manifestação</a>
                            <form class="app-search" action="/busca-protocolo/" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                                <input type="text" name="protocolo" class="form-control" placeholder="Nº de Protocolo" required> <a class="srh-btn"><i class="ti-close"></i></a>
                                <button type="submit" class="btn btn-success col-12"> <i class="fa fa-search"></i> Acompanhar</button>
                            </form>
                        </li>
                    </ul>
                    <ul class="navbar-nav my-lg-0">                       
                    </ul>
                </div>
                <div><a class="nav-link" style="color: azure" href="{{ route('login') }}">{{ __('Login') }}</a></div>
            </nav>
        </header>
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">                        
                            @yield('content')
                    </div>
                </div>
            </div>
            <footer class="footer">
                <a href="https://www.boavista.rr.gov.br/" target="_blank"><img src="/img/logo-pmbv.png" alt="" style="height: 50px"></a>
            </footer>
        </div>
    </div>

    <!-- Bootstrap tether Core JavaScript -->
    <script src="../theme/assets/plugins/popper/popper.min.js"></script>
    <script src="../theme/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="/theme/js/jquery.slimscroll.js"></script>
    <script src="/theme/js/waves.js"></script>
    <script src="/theme/js/sidebarmenu.js"></script>
    <script src="../theme/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="../theme/assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <script src="/theme/js/custom.min.js"></script>
    <script src="../theme/assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
    <script src="../theme/assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>

    <script>
       
       jQuery('.mydatepicker, #datepicker').datepicker({
            format: 'dd/mm/yyyy'
        });
        jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true
        });
        

        jQuery('#date-range').datepicker({
            toggleActive: true
        });
        jQuery('#datepicker-inline').datepicker({
            todayHighlight: true
        });
        
    </script>
</body>

</html>