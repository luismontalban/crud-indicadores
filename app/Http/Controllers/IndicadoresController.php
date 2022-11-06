<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Indicadores;

use Illuminate\Support\Facades\DB;

class IndicadoresController extends Controller
{



    public function index() {

        //$indicadores = DB::select('select nombreIndicador, codigoIndicador, unidadMedidaIndicador, valorIndicador, fechaIndicador from indicadores;');
        $indicadores= Indicadores::paginate(8);
        return view('indicadores.indicadores',  compact('indicadores'));
    }


    public function create(Request $request)
    {

        $indicador = new Indicadores();

        $indicador->nombreIndicador = $request->nombreIndicador;
        $indicador->codigoIndicador = $request->codigoIndicador;
        $indicador->unidadMedidaIndicador = $request->unidadMedidaIndicador;
        $indicador->valorIndicador = $request->valorIndicador;
        $indicador->fechaIndicador = $request->fechaIndicador;
        $indicador->tiempoIndicador = $request->tiempoIndicador;
        $indicador->origenIndicador = $request->origenIndicador;


        $indicador->save();
    }



    public function edit($id) {

        $indicadores = DB::table('indicadores')->where('id', $id)->first();

        //PASARLE A LA VISTA EL DATO

        return view('indicadores.edit', [
            'indicadores' => $indicadores
        ]);
    }

    public function update(Request $request) {
        $id = $request->input('id');
        $indicadores = DB::table('indicadores')
                ->where('id', $id)
                ->update(array(
            'nombreIndicador' => $request->input('nombreIndicador'),
            'codigoIndicador' => $request->input('codigoIndicador'),
            'unidadMedidaIndicador' => $request->input('unidadMedidaIndicador'),
            'valorIndicador' => $request->input('valorIndicador'),
            'fechaIndicador' => $request->input('fechaIndicador'),
            'tiempoIndicador' => $request->input('tiempoIndicador'),
            'origenIndicador' => $request->input('origenIndicador')

        ));



        return redirect()->route('index');
    }

    public function delete($id) {
        $indicadores = DB::table('indicadores')->where('id', $id)->delete();
        return redirect()->route('index');
    }

}
