@extends('layout.master')

@section('titulo', 'Inicio')

@section('content')

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

<div class="card">



    <h5 class="text-center">Formulario Indicador</h5>

    <form action="/indicadores/create" method="POST" enctype="multipart/form-data" id="formulario">
        @csrf
        <div class="card-body">
            @if (isset($indicador) && is_object($indicador))
                <input type="hidden" name="id" value="{{ $indicador->id }}" />
            @endif
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nombre Indicador</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="nombreIndicador"
                    value="{{ $indicador->nombreIndicador ?? '' }}" placeholder="Ingrese Nombre Indicador" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Codigo Indicador</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="codigoIndicador"
                    value="{{ $indicador->codigoIndicador ?? '' }}" placeholder="Ingrese Codigo Indicador" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Unidad Medida Indicador</label>
                <input type="text" class="form-control" id="exampleFormControlInput1"
                    name="unidadMedidaIndicador" value="{{ $indicador->unidadMedidaIndicador ?? '' }}"
                    placeholder="Ingrese Unidad de medida Indicador" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Valor Indicador</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="valorIndicador"
                    value="{{ $indicador->valorIndicador ?? '' }}" placeholder="Ingrese Valor del Indicador" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Fecha Indicador</label>
                <input type="date" class="form-control" id="exampleFormControlInput1" name="fechaIndicador"
                    value="{{ $indicador->fechaIndicador ?? '' }}" placeholder="Ingrese Fecha del Indicador" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Tiempo del Indicador</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="tiempoIndicador"
                    value="{{ $indicador->tiempoIndicador ?? '' }}" placeholder="Tiempo del Indicador">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Origen del Indicador</label>
                <input type="text" class="form-control" id="exampleFormControlInput1"
                    name="origenIndicador" value="{{ $indicadores->origenIndicador ?? '' }}">
            </div>
            <div class="d-grid gap-2 col-4 mx-auto">
                <button class="btn btn-primary" type="submit">Guardar Indicador</button>

            </div>
        </div>

    </form>
</div>



@endsection


@section('scripts')
<script src="{{ asset('js/ajax-post.js') }}" defer></script>

@endsection

