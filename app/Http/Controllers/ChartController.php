<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Indicadores;
use Carbon\Carbon;

class ChartController extends Controller
{
    public function index(Request $request){
        //$indicadores = DB::select('select nombreIndicador, sum(valorIndicador) as suma from indicadores group by nombreIndicador');

        //$indicadores = Indicadores::get()->unique('nombreIndicador');

        /*
        $startDate = Carbon::createFromFormat('Y-m-d', '2021-01-04');
        $endDate = Carbon::createFromFormat('Y-m-d', '2021-01-08');

        */


        $indicadores= Indicadores::groupBy('nombreIndicador')
        ->selectRaw('nombreIndicador, sum(valorIndicador) as sum')
        //->where('fechaIndicador', '>=', $startDate)
        //->where('fechaIndicador', '<=', $endDate)
        ->get();




        $puntos = [];

        foreach ($indicadores as $indicador) {
            $puntos[] = ['name' => $indicador['nombreIndicador'], 'y'=> $indicador['sum']];

        }




        return view('chart.grafico', ['data2' => json_encode($puntos)]);


    }

    public function indicadoresJson(Request $request){
        $startDate = $request->input('startDate');
        $endDate = $request->input('endDate');

        $indicadores= Indicadores::groupBy('nombreIndicador')
        ->selectRaw('nombreIndicador, sum(valorIndicador) as sum')
        //->where('fechaIndicador', '>=', $startDate)
        //->where('fechaIndicador', '<=', $endDate)
        ->get();





        $puntos = [];

        foreach ($indicadores as $indicador) {
            $puntos[] = ['categories' => $indicador['nombreIndicador'], 'series'=> $indicador['sum']];

        }


        return $puntos;


    }
}
