@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h6 class="card-subtitle"></h6>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Pie Chart</h4>
                        <div class="flot-chart">
                            <div class="flot-chart-content" id="flot-pie-chart"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
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
    


    <script>
        //Flot Pie Chart
        console.log('<?php 
            foreach ($chamados as $c){
                echo($c->descricao);
            }
        ?>')

        //var chamado = $chamados;
        function getRandomColor() {
            var letters = '0123456789ABCDEF';
            var color = '#';
            for (var i = 0; i < 6; i++) {
                color += letters[Math.floor(Math.random() * 16)];
            }
            return color;
            }
            
        $(function () {
            var color = getRandomColor();
            console.log(color);
            var data = [
            <?php 
                foreach($chamados as $c) {
                    echo('{');
                    echo('label:"'.$c->descricao.'",');
                    echo('data:"'.$c->count.'",');
                    echo('color: '); ?> getRandomColor()<?php ('",');
                    echo('},');
                }
            ?>            
            ];
            var plotObj = $.plot($("#flot-pie-chart"), data, {
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
        });
        </script>

@endsection



    