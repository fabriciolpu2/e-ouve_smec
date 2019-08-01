<!DOCTYPE html>
<html lang="en">

<head>
    <link href="/theme/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="">
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <img src="/img/logo-pmbv.png" alt="" style="height: 50px;">
                </div>
                <div class="col-lg-4 col-md-4" style="text-align: center; font-size: 9px;">
                    <p>PREFEITURA MUNICIPAL DE BOA VISTA</p>
                    <p>SECRETARIA MUNICIPAL DE EDUCAÇÃO E CULTURA</p>
                    <p>GESTÃO DO SECRETÁRIO</p>
                    <p>OUVIDORIA</p>
                </div>
                <div class="col-lg-4 col-md-4">
                    <img src="/img/logo-pmbv.png" alt="" style="height: 50px;">
                </div>
            </div> 
            {{-- Row --}}
            @yield('content')
        </div>
    </div>
   
</body>

</html>