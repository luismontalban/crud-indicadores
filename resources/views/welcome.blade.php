<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CRUD Indicador UF</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
  </head>
  <body>
  <nav class="navbar navbar-expand-lg"  style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="/">Indicador UF</a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('index') }}">Listado de UF</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('grafico') }}">Grafico</a>
        </li>
      </ul>


    </div>
  </div>
</nav>
<div class="container">

<div class="card">



        <h5 class="center-align">Formulario Indicador</h5>

<form action="/indicadores/create" method="POST" enctype="multipart/form-data" id="formulario">
@csrf
<div class="card-body">
@if(isset($indicador) && is_object($indicador))
<input type="hidden" name="id" value="{{$indicador->id }}" />
@endif
  <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nombre Indicador</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name="nombreIndicador" value="{{$indicador->nombreIndicador ?? ''}}" placeholder="Ingrese Nombre Indicador">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Codigo Indicador</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name="codigoIndicador" value="{{$indicador->codigoIndicador ?? ''}}" placeholder="Ingrese Codigo Indicador">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Unidad Medida Indicador</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name="unidadMedidaIndicador" value="{{$indicador->unidadMedidaIndicador ?? ''}}" placeholder="Ingrese Unidad de medida Indicador">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Valor Indicador</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name="valorIndicador" value="{{$indicador->valorIndicador ?? ''}}" placeholder="Ingrese Valor del Indicador">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Fecha Indicador</label>
  <input type="date" class="form-control" id="exampleFormControlInput1" name="fechaIndicador" value="{{$indicador->fechaIndicador ?? ''}}" placeholder="Ingrese Fecha del Indicador">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Tiempo del Indicador</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name="tiempoIndicador" value="{{$indicador->tiempoIndicador ?? ''}}" placeholder="Tiempo del Indicador">
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Origen del Indicador</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name="origenIndicador" value="{{$indicadores->origenIndicador ?? ''}}">
</div>
<div class="d-grid gap-2 col-4 mx-auto">
  <button class="btn btn-primary" type="submit">Guardar Indicador</button>

</div>
  </div>

  </form>
</div>

</div>

  </body>

  <script src="{{ asset('js/ajax-post.js') }}" defer></script>
</html>
