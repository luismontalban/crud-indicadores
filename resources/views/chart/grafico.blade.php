@extends('layout.master')

@section('titulo', 'Grafico')

@section('content')

    <div class="container">

        <div class="row justify-content-center">
            <div class="col-lg-3 col-sm-6">
                <label for="startDate">Desde</label>
                <input name="startDate" id="startDate" value="2021-01-04" class="form-control" type="date" />
                <span id="startDateSelected"></span>
            </div>
            <div class="col-lg-3 col-sm-6">
                <label for="endDate">Hasta</label>
                <input name="endDate" id="endDate" value="2021-01-10" class="form-control" type="date" />
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


    @endsection

    @section('scripts')

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>



    <script src="{{ asset('js/indicadores.js') }}" defer></script>

    @endsection


