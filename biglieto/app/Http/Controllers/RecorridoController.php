<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Recorrido;

class RecorridoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //if (!$request->ajax())return redirect('/');
        $buscar = $request->buscar;
        if($buscar ==''){
            $recorridos = Recorrido::orderBy('idRe','desc')->paginate(10);
        }
        else{
            $recorridos = Recorrido::where('provincia_O','like','%'. $buscar .'%')->orderBy('idRe','desc')->paginate(10);
        }
        return [
            'pagination'=>[
                'total' => $recorridos->total(),
                'current_page'=>$recorridos->currentPage(),
                'per_page'=>$recorridos->perPage(),
                'last_page'=>$recorridos->lastPage(),
                'from'=>$recorridos->firstItem(),
                'to'=>$recorridos->lastItem(),

            ],
            'recorridos'=>$recorridos

        ];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $recorrido =  new Recorrido();
        $recorrido->provincia_O = $request ->provincia_O;
        $recorrido->provincia_D = $request ->provincia_D;
        $recorrido->canton_O = $request ->canton_O;
        $recorrido->canton_D = $request ->canton_D;
        $recorrido->direccion_O = $request ->direccion_O;
        $recorrido->direccion_D = $request ->direccion_D;
        $recorrido->save();
      
    }


    public function buscar(Request $request)
    {
        if (!$request->ajax())return redirect('/');
        $recorrido =  new Recorrido();
        $recorrido->provincia_O = $request ->provincia_O;
        $recorrido->provincia_D = $request ->provincia_D;
        $recorrido->canton_O = $request ->canton_O;
        $recorrido->canton_D = $request ->canton_D;
        $recorrido->direccion_O = $request ->direccion_O;
        $recorrido->direccion_D = $request ->direccion_D;
        $recorrido->save();
      
    }
   

   
   
}
