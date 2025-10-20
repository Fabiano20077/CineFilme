@extends('templates.admTemplate')
@section('headC')

<link rel="stylesheet" href="{{url('assets/css/dashboard.css')}}">

@endsection
@section('conteudoC')



<div class="container">

<div class="kpis">
    <div class="card">
        <label class="cardText">usuarios</label>
        <label for="">{{$usuarios}}</label>
    </div>
    <div class="card">
        <label class="cardText">filmes</label>
        <label for="">{{$filmes}}</label>
    </div>
    <div class="card">
        <label class="cardText">ingressos</label>
        <label for="">{{$ingressos}}</label>
    </div>
 
</div>

    <div class="graficos">
        <!-- Gráfico de Pizza -->
        <div class="chart" id="piechart"></div>

        <!-- Novo Gráfico de Colunas -->
        <div class="chart" id="barchart"></div>

        <a class="pdfGenero" href="{{route('pdfGenero')}}">gerar pdf genero </a>
    </div>
</div>



<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {
        packages: ['corechart']
    });
    google.charts.setOnLoadCallback(drawCharts);

    function drawCharts() {
        // --- Gráfico de Pizza ---
        var dataPie = google.visualization.arrayToDataTable([
            ['Gênero', 'Quantidade'],
            @foreach($generosProcurados as $generos)
            ['{{$generos->genero}}', {{$generos->totalIngressos}}],
            @endforeach
        ]);

        var optionsPie = {
            title: 'Gêneros mais procurados:',
            titleTextStyle: {
                fontSize: 20,
                bold: true,
                color: '#fff'
            },
            backgroundColor: 'transparent',
            legend: {
                textStyle: {
                    color: '#ddd',
                    fontSize: 14
                }
            },
            chartArea: {
                backgroundColor: 'transparent'
            }
        };

   
        var chartPie = new google.visualization.PieChart(document.getElementById('piechart'));
        chartPie.draw(dataPie, optionsPie);

        // --- Gráfico de Colunas ---
        var dataBar = google.visualization.arrayToDataTable([
            ['Ano', 'Filmes lançados'],
            ['2020', 5],
            ['2021', 8],
            ['2022', 12],
            ['2023', 9],
            ['2024', 14]
        ]);

        var optionsBar = {
            title: 'Filmes lançados por ano',
            titleTextStyle: {
                fontSize: 20,
                bold: true,
                color: '#fff'
            },
            legend: {
                position: 'none'
            },
            colors: ['#f39c12'],
            backgroundColor: 'transparent',
            hAxis: {
                textStyle: {
                    color: '#ddd'
                }
            },
            vAxis: {
                textStyle: {
                    color: '#ddd'
                }
            },
            chartArea: {
                backgroundColor: 'transparent'
            }
        };


        var chartBar = new google.visualization.ColumnChart(document.getElementById('barchart'));
        chartBar.draw(dataBar, optionsBar);
    }
</script>

@endsection