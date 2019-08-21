<!DOCTYPE html>
<html lang="en">

<head>
    <link href="/theme/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="">
    <div class="page-wrapper">
    </br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-3">
                    <img src="/img/logo.png" alt="" style="height: 150px;">
                </div>
                <div class="col-lg-4 col-md-6" style="text-align: center; font-size: 18px;">
                    <b>
                    PREFEITURA MUNICIPAL DE BOA VISTA</br>
                    SECRETARIA MUNICIPAL DE EDUCAÇÃO E CULTURA</br>
                    GESTÃO DO SECRETÁRIO</br>
                    OUVIDORIA</br>
                    </b>
                </div>
                <div class="col-lg-4 col-md-3" style="text-align: right">
                    <img src="/img/brasao.png" alt="" style="height: 150px;">
                </div>
            </div> 
            {{-- Row --}}
            @yield('content')
        </div>
    </div>
   
</body>

</html>