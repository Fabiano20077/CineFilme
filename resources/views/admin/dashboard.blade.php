@extends('templates.admTemplate')
@section('headC')

<link rel="stylesheet" href="{{url('assets/css/dashboard.css')}}">

@endsection
@section('conteudoC')

       <main>

       <div class="graficos">
        <!-- Gráfico de Pizza -->
        <div class="chart" id="piechart" style="width: 800px; height: 500px; margin: 20px;"></div>

        <!-- Novo Gráfico de Colunas -->
        <div  class="chart" id="barchart" style="width: 800px; height: 500px; margin: 20px;"></div>

        </div>
    </main>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', { packages: ['corechart'] });
        google.charts.setOnLoadCallback(drawCharts);

        function drawCharts() {
            // --- Gráfico de Pizza ---
            var dataPie = google.visualization.arrayToDataTable([
                ['Gênero', 'Quantidade'],
                ['Ficção', 11],
                ['Terror', 2],
                ['Ação', 4],
                ['Animação', 7]
            ]);

            var optionsPie = {
                title: 'Gêneros mais procurados:',
                titleTextStyle: { fontSize: 20, bold: true, color: '#333' }
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
                titleTextStyle: { fontSize: 20, bold: true, color: '#333' },
                hAxis: { title: 'Ano' },
                vAxis: { title: 'Quantidade' },
                legend: { position: 'none' },
                colors: ['#f39c12']
            };

            var chartBar = new google.visualization.ColumnChart(document.getElementById('barchart'));
            chartBar.draw(dataBar, optionsBar);
        }
    </script>

@endsection

