<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Indicadores;

use Illuminate\Support\Facades\DB;

class IndicadoresController extends Controller
{



    public function index() {


        $indicador= Indicadores::orderBy('fechaIndicador', 'asc')->paginate(8);
        return view('indicadores.indicadores',  compact('indicador'));
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

        $indicador = DB::table('indicadores')->where('id', $id)->first();



        return view('indicadores.edit', ['indicador' => $indicador]);
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
        $indicador = DB::table('indicadores')->where('id', $id)->delete();
        return redirect()->route('index');
    }

}
