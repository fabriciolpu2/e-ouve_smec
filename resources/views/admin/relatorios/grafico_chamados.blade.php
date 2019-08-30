@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Pie Chart</h4>
                <div class="flot-chart">
                    <div class="flot-chart-content" id="flot-pie-chart"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Bar Chart</h4>
                <div id="morris-bar-chart"></div>
            </div>
        </div>
    </div>
</div>
<!-- Row -->
@endsection

@section('scripts')
    <script src="/theme/assets/plugins/flot/jquery.flot.js"></script>
    <script src="/theme/assets/plugins/flot/jquery.flot.pie.js"></script>
    <script src="/theme/assets/plugins/flot/excanvas.js"></script>
    
    <script src="/theme/assets/plugins/flot/jquery.flot.time.js"></script>
    <script src="/theme/assets/plugins/flot/jquery.flot.stack.js"></script>
    <script src="/theme/assets/plugins/flot/jquery.flot.crosshair.js"></script>
    <script src="/theme/assets/plugins/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>

    <!--Morris JavaScript -->
    <script src="/theme/assets/plugins/raphael/raphael-min.js"></script>
    <script src="/theme/assets/plugins/morrisjs/morris.js"></script>
    


    <script>
        function pie() {
            var pieChamamados;
            $.ajax({
                type: 'get',
                url: '/admin/relatorio/graficos/dados',
                dataType: "json",
                success: function(data) {
                    pieChamamados = data.chamado;
                    var plotObj = $.plot($("#flot-pie-chart"), pieChamamados, {
                        series: {
                            pie: {
                                innerRadius: 0.5
                                , show: true
                            }
                        }
                        , grid: {
                            hoverable: true
                        }
                        , color: null
                        , tooltip: true
                        , tooltipOpts: {
                            content: "%p.0%, %s", // show percentages, rounding to 2 decimal places
                            shifts: {
                                x: 20
                                , y: 0
                            }
                            , defaultTheme: false
                        }
                    });
                    return pieChamamados;
                }
            });
        };
            
        $(function () {
            pie();
        });
    </script>

    <script>
        $(function () {
            var escolasMunicipais;
            $.ajax({
                type: 'get',
                url: '/admin/relatorio/graficos/dados',
                dataType: "json",
                success: function(data) {
                    // escolasMunicipais = data.escolasMunicipais;
                    // console.log(escolasMunicipais)
                    // Morris.Bar({
                    // element: 'morris-bar-chart',
                    // data: [escolasMunicipais],
                    // xkey: 'titulo',
                    // ykeys: ['0','1'],
                    // labels: [escolasMunicipais],
                    // barColors:['#55ce63', '#2f3d4a', '#009efb'],
                    // hideHover: 'auto',
                    // gridLineColor: '#eef0f2',
                    // resize: true
                });
                }
            });
        });
    </script>

@endsection



    