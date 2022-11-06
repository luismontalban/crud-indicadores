<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Lista de Indicadores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
    <!-- Popperjs -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
  crossorigin="anonymous"></script>
<!-- Tempus Dominus JavaScript -->
<script src="https://cdn.jsdelivr.net/gh/Eonasdan/tempus-dominus@master/dist/js/tempus-dominus.js"
  crossorigin="anonymous"></script>

<!-- Tempus Dominus Styles -->
<link href="https://cdn.jsdelivr.net/gh/Eonasdan/tempus-dominus@master/dist/css/tempus-dominus.css"
  rel="stylesheet" crossorigin="anonymous">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
  </head>
  <body>
  <nav class="navbar navbar-expand-lg"  style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="/">Indicadores</a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#!">Lista de Indicadores</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Grafico</a>
        </li>
      </ul>


    </div>
  </div>
</nav>

<div class="container">

    <div class="row justify-content-center">
        <div class="col-lg-3 col-sm-6">
            <label for="startDate">Desde</label>
            <input name="startDate" id="startDate" class="form-control" type="date" />
            <span id="startDateSelected"></span>
        </div>
        <div class="col-lg-3 col-sm-6">
            <label for="endDate">Hasta</label>
            <input name="endDate" id="endDate" class="form-control" type="date" />
            <span id="endDateSelected"></span>
        </div>
    </div>


</div>


<div class="container mt-5">

<div class="row">
<div class="col">
<div id="container">



</div>
</div>

</div>
</div>



<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>


<script>
// Data retrieved from https://netmarketshare.com
Highcharts.chart('container', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Indicadores'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %'
            }
        }
    },
    series: [{
        name: 'Porcentaje',
        colorByPoint: true,
        data: <?=$data2?>
    }]
});


</script>



  </body>



</html>
