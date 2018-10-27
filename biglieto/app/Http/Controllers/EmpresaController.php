<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Collection;
use App\Recorrido;

class EmpresaController extends Controller
{
    public function retornarVistaEm($idEm){
        $recorridos = Recorrido::where('provincia_O',$idEm)->get(); 
        if(count($recorridos)==1)
        {
            Session::put('NEM', $idEm);
            return view('contenidoEm/contenido2');
        }
        Session::flush();
        return redirect("/");  
    }

    public function abrirPagina(Request $request){
        $this->validarPagina($request);   
        $recorridos = Recorrido::where('provincia_O',$request->idEmpresa)->get();
        if (count($recorridos)==1){
            Session::put('NEM', $request->idEmpresa);
            return redirect("/empresa/$request->idEmpresa");
        }
        Session::flush();
        return back()
        ->withErrors(['provincia_O' => trans('auth.failed')])
        ->withInput(request(['provincia_O']));
    }

    public function obtenerNombreEmpresa(Request $request){
        return Session::get('NEM');
    }

    protected function validarPagina(Request $request){
        $this->validate($request,[
            'idEmpresa' => 'required|int'
            ]);
    }
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function recorridos(Request $request)
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
    public function oficinas(Request $request)
    {
        //
    }
    public function servicios(Request $request)
    {
        //
    }
}
