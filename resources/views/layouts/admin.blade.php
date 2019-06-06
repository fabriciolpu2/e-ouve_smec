<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Ouvidoria SMEC - Admin </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/material/assets/images/favicon.png">
    <link href="/theme/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/theme/assets/plugins/footable/css/footable.core.css" rel="stylesheet">
    <link href="/theme/css/style.css" rel="stylesheet">
    <link href="/theme/css/colors/blue.css" id="theme" rel="stylesheet">
    
    <link href="/theme/assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet">
    <script src="/theme/assets/plugins/jquery/jquery.min.js"></script>
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="fix-header fix-sidebar card-no-border">
        <div class="preloader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
        </div>
        <div id="main-wrapper">
            <header class="topbar">
                <nav class="navbar top-navbar navbar-expand-md navbar-light">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="index.html">
                            <b>
                                
                            </b>
                            <span>
                             
                    </div>
                    
                    <div class="navbar-collapse">                            
                            
                        <ul class="navbar-nav mr-auto mt-md-0">
                            <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                            <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                            <li class="nav-item hidden-sm-down search-box">
                                <a class="nav-link hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                                <form class="app-search">
                                    <input type="text" class="form-control" placeholder="Nº de Protocolo"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                            </li>
                            
                        </ul>
                        <div class="m-b-0 text-white"><i class="fa fa-headphones fa-2x" style="text-align: center"></i> Ouvidoria SMEC</div>
                        <ul class="navbar-nav my-lg-0">
                            <li class="nav-item dropdown">
                                {{-- <a class="nav-link dropdown-toggle text-muted text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-message"></i>
                                    <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right mailbox scale-up">                                    
                                </div> --}}
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="/img/profile.png" alt="user" class="profile-pic" />
                                </a>
                                <div class="dropdown-menu dropdown-menu-right scale-up">
                                    <ul class="dropdown-user">
                                        <li>
                                            <div class="dw-user-box">
                                                <div class="u-img"><img src="/img/profile.png" alt="user"></div>
                                                <div class="u-text">
                                                    <h4>{{ Auth::user()->name }}</h4>
                                                    {{ Auth::user()->email }}</div>
                                            </div>
                                        </li>
                                        <li role="separator" class="divider"></li>
                                        {{-- <li><a href="#"><i class="ti-user"></i> My Profile</a></li> --}}
                                        <li><a class="dropdown-item" href="{{ route('logout') }}">{{ __('Logout') }}</a></li>
                                    </ul>
                                </div>
                                
                            </li>
                        </ul>
                        
                    </div>
                </nav>
            </header>
            <aside class="left-sidebar">
                <div class="scroll-sidebar">
                    <div class="user-profile" style="background: url(/material/assets/images/background/user-info.jpg) no-repeat;">
                    

                        <div class="profile-img"> <img src="/img/profile.png" alt="user" /> </div>
                        <div class="profile-text"> <a href="#" class="" data-toggle="" role="" aria-haspopup="true" aria-expanded="true">{{ Auth::user()->name }} <span class="caret"></span></a>
                        </div>
                    </div>
                    <nav class="sidebar-nav">
                        <ul id="sidebarnav">
                            {{-- <li class="nav-devider"></li> --}}
                            <li class="nav-small-cap"></li>
                            <li>
                                <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-file"></i><span class="hide-menu">Manifestações</span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="/home">Exibir Todas</a></li>
                                    <li><a href="/manifestacoes/type/1">Denúncias</a></li>
                                    <li><a href="/manifestacoes/type/2">Reclamações</a></li>
                                    <li><a href="/manifestacoes/type/3">Sugestões</a></li>
                                    <li><a href="/manifestacoes/type/4">Elogios</a></li>
                                    <li><a class="has-arrow" href="#" aria-expanded="false"><b>Status</b></a>
                                        <ul aria-expanded="false" class="collapse">
                                            <li><a href="/manifestacoes/status/1">Aberto</a></li>
                                            <li><a href="/manifestacoes/status/2">Em Analise</a></li>
                                            <li><a href="/manifestacoes/status/3">Encerrados</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-chart-pie"></i><span class="hide-menu">Relatórios</span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="#">#</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">Usuários</span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="/admin/usuarios/cadastrar">Cadastrar Usuário</a></li>
                                    <li><a href="/admin/usuarios/">Listar usuários</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </aside>
            <div class="page-wrapper">
                <div class="container-fluid">
                    <br>
                     @yield('content')
                </div>
                <footer class="footer" style="text-align: center">
                    <img src="/img/logo-pmbv.png" alt="" style="height: 50px">
                </footer>
            </div>
        </div>

        <script src="/theme/assets/plugins/popper/popper.min.js"></script>
        <script src="/theme/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="/theme/js/jquery.slimscroll.js"></script>
        <script src="/theme/js/waves.js"></script>
        <script src="/theme/js/sidebarmenu.js"></script>
        <script src="/theme/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
        <script src="/theme/assets/plugins/sparkline/jquery.sparkline.min.js"></script>
        <script src="/theme/js/custom.min.js"></script>
        <script src="/theme/assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
        <script src="/theme/assets/plugins/footable/js/footable.all.min.js"></script>
        <script src="/theme/assets/plugins/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
        <script src="/theme/js/footable-init.js"></script>
        <script src="/theme/assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>

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
