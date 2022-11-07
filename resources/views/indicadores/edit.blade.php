@extends('layout.master')

@section('titulo', 'Editar')

@section('content')

        <div class="card">


            <h5 class="text-center">Actualizar Indicador</h5>



            <form action="/indicadores/update" method="POST" enctype="multipart/form-data" id="formulario-edit">
                @csrf
                <div class="card-body">
                    @if (isset($indicador) && is_object($indicador))
                        <input type="hidden" name="id" id="id" value="{{ $indicador->id }}" />
                    @endif
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nombre Indicador</label>
                        <input type="text" class="form-control" id="nombreIndicador" name="nombreIndicador"
                            value="{{ $indicador->nombreIndicador ?? '' }}" placeholder="Ingrese Nombre Indicador" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Codigo Indicador</label>
                        <input type="text" class="form-control" id="codigoIndicador" name="codigoIndicador"
                            value="{{ $indicador->codigoIndicador ?? '' }}" placeholder="Ingrese Codigo Indicador" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Unidad Medida Indicador</label>
                        <input type="text" class="form-control" id="unidadMedidaIndicador"
                            name="unidadMedidaIndicador" value="{{ $indicador->unidadMedidaIndicador ?? '' }}"
                            placeholder="Ingrese Unidad de medida Indicador" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Valor Indicador</label>
                        <input type="text" class="form-control" id="valorIndicador" name="valorIndicador"
                            value="{{ $indicador->valorIndicador ?? '' }}" placeholder="Ingrese Valor del Indicador" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Fecha Indicador</label>
                        <input type="date" class="form-control" id="fechaIndicador" name="fechaIndicador"
                            value="{{ $indicador->fechaIndicador ?? '' }}" placeholder="Ingrese Fecha del Indicador" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Tiempo del Indicador</label>
                        <input type="text" class="form-control" id="tiempoIndicador" name="tiempoIndicador"
                            value="{{ $indicador->tiempoIndicador ?? '' }}" placeholder="Tiempo del Indicador">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Origen del Indicador</label>
                        <input type="text" class="form-control" id="origenIndicador" name="origenIndicador"
                            value="{{ $indicador->origenIndicador ?? '' }}">
                    </div>
                    <div class="d-grid gap-2 col-4 mx-auto">
                        <button class="btn btn-primary" type="submit">Actualizar Indicador</button>

                    </div>
                </div>

            </form>
        </div>

    </div>

@endsection


@section('scripts')
<script src="{{ asset('js/ajax-update.js') }}" defer></script>
@endsection


