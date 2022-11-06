<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Indicadores;


class ChartController extends Controller
{

public function indicadoresJson(Request $request){
        $start = $request->input('start');
        $end = $request->input('end');

        $indicadores= Indicadores::groupBy('nombreIndicador')
        ->selectRaw('nombreIndicador, sum(valorIndicador) as sum')
        ->where('fechaIndicador', '>=', $start)
        ->where('fechaIndicador', '<=', $end)
        ->get();

        $data = [];
        $data['categories'] = $indicadores->pluck('nombreIndicador');

        $series = [];

        $series1 ['name'] = 'Indicadores';
        $series1 ['data'] = $indicadores->pluck('sum');

        $series[] = $series1;

        $data['series'] = $series;

        return $data;



    }

    public function chart(){


        return view('chart.grafico');

    }


}
