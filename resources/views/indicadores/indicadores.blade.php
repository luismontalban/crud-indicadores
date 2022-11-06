<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Lista de Indicadores</title>
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

<center><h1>Indicadores</h1></center>
<br/>

<div class="table-responsive">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre Indicador</th>
      <th scope="col">Codigo Indicador</th>
      <th scope="col">Unidad Medida</th>
      <th scope="col">Valor Indicador</th>
      <th scope="col">Fecha Indicador</th>
      <th scope="col">Accion</th>
    </tr>
  </thead>
  <tbody>
  @foreach($indicadores as $indicador)
    <tr>
      <td>{{$indicador->nombreIndicador}}</td>
      <td>{{$indicador->codigoIndicador}}</td>
      <td>{{$indicador->unidadMedidaIndicador}}</td>
      <td>{{$indicador->valorIndicador}}</td>
      <td>{{$indicador->fechaIndicador}}</td>
      <td><a href="{{ route('indi.edit',$indicador->id)}}" class="btn btn-warning">Editar</a></td>
      <td><a href="{{ route('indi.delete',$indicador->id)}}" id="btn-delete" class="btn btn-danger">Eliminar</a></td>
    </tr>
    @endforeach
  </tbody>
  </table>
</div>

{{-- Pagination --}}
        <div class="d-flex justify-content-center">
            {!! $indicadores->links() !!}
        </div>


  </body>
  <script src="{{ asset('js/ajax-delete.js') }}" defer></script>

</html>
