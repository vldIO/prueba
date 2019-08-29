<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Maestro;

class MaestroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $maestros = Maestro::all();
        return view('maestro', compact('maestros'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request;
        Maestro::create($request->all());
        return redirect()->route('maestros.index');
        return redirect('maestros')->with('status', 'El maestro ha sido añadido');
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $maestro = Maestro::whereId($id)->firstOrFail();
        $maestro->nombre = $request->get('nombre');
        $maestro->materia = $request->get('materia');
        $maestro->edad = $request->get('edad');
        
        if($request->get('status') != null){
            $mensaje->status = 0;
        }else{
            $mensaje->status = 1;
        }
        $mensaje->save();
        
        return redirect()->route('maestros.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $maestro = Maestro::whereId($id)->firstOrFail();
        $maestro->delete();
        return redirect('maestros')->with('stat', 'El maestro ' . $id . ' Ha sido eliminado');
    }

    public function add(){
        return view('addmaestro');
    }
    public function edit($id)
    {
        $maestro = Maestro::whereId($id)->firstOrFail();
        return view('modmaestro', compact('maestro'));
    }
    public function elim($id)
    {
        //
    
    }
}
