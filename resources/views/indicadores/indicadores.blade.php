@extends('layout.master')

@section('titulo', 'Lista')

@section('content')

        <h2 class="text-center">Listado UF</h1>

    <br />

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
                @foreach ($indicador as $uf)
                    <tr>
                        <td>{{ $uf->nombreIndicador }}</td>
                        <td>{{ $uf->codigoIndicador }}</td>
                        <td>{{ $uf->unidadMedidaIndicador }}</td>
                        <td>{{ $uf->valorIndicador }}</td>
                        <td>{{ $uf->fechaIndicador }}</td>
                        <td><a href="{{ route('indi.edit', $uf->id) }}" class="btn btn-warning">Editar</a></td>
                        <td><a href="{{ route('indi.delete', $uf->id) }}" id="btn-delete"
                                class="btn btn-danger">Eliminar</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    <div class="d-flex justify-content-center">
        {!! $indicador->links() !!}
    </div>


 @endsection

 @section('scripts')
<script src="{{ asset('js/ajax-delete.js') }}" defer></script>
@endsection


