<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Ouvidoria SMEC - Login</title>
    <!-- Bootstrap Core CSS -->
    <link href="/theme/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/theme/css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="/theme/css/colors/blue.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <section id="wrapper">
        {{-- <div class="login-register" style="background-image:url(../assets/images/background/login-register.jpg);"> --}}
          <div class="login-register" style="background-color: lightgrey">
            <div class="login-box card">
            <div class="card-body">
      <form class="form-horizontal form-material" id="loginform" action="{{ route('login') }}" method="POST">
            @csrf
            <div class="m-b-0 text-black" style="text-align: center"><i class="fa fa-headphones fa-2x"></i> Ouvidoria SMEC</div>            
        <div class="form-group m-t-40">
          <div class="col-xs-12">            
            <input id="email" class="form-control @error('email') is-invalid @enderror" 
                type="email" required placeholder="E-mail" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
          </div>
        </div>
        <div class="form-group">
          <div class="col-xs-12">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input 
                    class="form-control @error('password') is-invalid @enderror" 
                    id="password" type="password" placeholder="Password" 
                    name="password" required autocomplete="current-password">
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-12">
            <div class="checkbox checkbox-primary pull-left p-t-0">
              <input id="checkbox-signup" type="checkbox">
              <label for="checkbox-signup"> Lembrar </label>
            </div>
                @if (Route::has('password.request'))
                    <a 
                        id="to-recover" class="text-dark pull-right" 
                        href="javascript:void(0)">
                        {{ __('Esqueceu a Senha') }}
                    </a>
                @endif
            </div>
        </div>
        <div class="form-group text-center m-t-20">
          <div class="col-xs-12">
            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Log In</button>
          </div>
        </div>    
        <div style="text-align: center">
            <img src="/img/logo-pmbv.png" alt="" style="height: 30px">    
        </div>
        
      </form>
      <form class="form-horizontal" id="recoverform" action="{{ route('password.email') }}" method="POST">
            @csrf            
            <div class="form-group ">
                <div class="col-xs-12">
                    <h3>Recover Password</h3>
                    <p class="text-muted">Enter your Email and instructions will be sent to you! </p>
                </div>
            </div>
        <div class="form-group ">
            <div class="col-xs-12">
                <input id="email" 
                    type="email" 
                    class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
          </div>
        </div>
        <div class="form-group text-center m-t-20">
          <div class="col-xs-12">
            <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

</section>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="../theme/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="../theme/assets/plugins/popper/popper.min.js"></script>
<script src="../theme/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="/theme/js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="/theme/js/waves.js"></script>
<!--Menu sidebar -->
<script src="/theme/js/sidebarmenu.js"></script>
<!--stickey kit -->
<script src="../theme/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
<script src="../theme/assets/plugins/sparkline/jquery.sparkline.min.js"></script>
<!--Custom JavaScript -->
<script src="/theme/js/custom.min.js"></script>
<!-- ============================================================== -->
<!-- Style switcher -->
<!-- ============================================================== -->
<script src="/theme/assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>