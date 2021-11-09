@extends('layout.main')
@section('head')
    <script type="text/javascript">
        var jual = <?php echo $jual; ?>;
        // console.log(jual);
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable(jual);
            // console.log(data);
            var options = {
                title: 'Pie Chart per Kategori Barang',
                legend: {position:'right'},
                is3D: true,
            };
            var chart = new google.visualization.PieChart(document.getElementById('linechart'));
            chart.draw(data, options);
            var options1 = {
                title: 'Bar Chart per Kategori Barang',
                legend: {position:'right'},
                
            };
            var chart1 = new google.visualization.BarChart(document.getElementById('barchart'));
            chart1.draw(data, options1);
        }
    </script>
@endsection
@section('main')
    <div class="text-center" style="margin-top: 15px;">
        <h1>Visualisasi Data Barang</h1>
    </div>
    <div class="container-fluid text-center ">
        <div class="row">
            <div class="col-sm-6" >
                <div id="linechart" style="width: 100%; height: 32rem"></div>
            </div>
            <div class="col-sm-6">
                <div id="barchart" style="width: 100%; height: 32rem"></div>
            </div>
        </div>
    </div>
@endsection