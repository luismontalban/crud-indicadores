<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Lista de Indicadores</title>

    <style>
      * {
        margin: 0;
        padding: 0;
        font-family: sans-serif;
      }
      .chartMenu {
        width: 100vw;
        height: 40px;
        background: #1A1A1A;
        color: rgba(255, 26, 104, 1);
      }
      .chartMenu p {
        padding: 10px;
        font-size: 20px;
      }
      .chartCard {
        width: 100vw;
        height: calc(100vh - 40px);
        background: rgba(255, 26, 104, 0.2);
        display: flex;
        align-items: center;
        justify-content: center;
      }
      .chartBox {
        width: 700px;
        padding: 20px;
        border-radius: 20px;
        border: solid 3px rgba(255, 26, 104, 1);
        background: white;
      }
    </style>
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



<div class="chartMenu">
      <p>WWW.CHARTJS3.COM (Chart JS 3.9.1)</p>
    </div>
    <div class="chartCard">
      <div class="chartBox">
        <canvas id="myChart"></canvas>
      </div>
    </div>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
    // setup
    const data = {
      labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
      datasets: [{
        label: 'Weekly Sales',
        data: [18, 12, 6, 9, 12, 3, 9],
        backgroundColor: [
          'rgba(255, 26, 104, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)',
          'rgba(0, 0, 0, 0.2)'
        ],
        borderColor: [
          'rgba(255, 26, 104, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)',
          'rgba(0, 0, 0, 1)'
        ],
        borderWidth: 1
      }]
    };

    // config
    const config = {
      type: 'bar',
      data,
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    };

    // render init block
    const myChart = new Chart(
      document.getElementById('myChart'),
      config
    );
    </script>


{{$data2}}

  </body>



</html>
