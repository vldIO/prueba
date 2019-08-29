<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumno;
use Redirect;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumnos = Alumno::paginate(5);
        return view('alumno', compact('alumnos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Alumno::create($request->all());
        return redirect('alumnos')->with('status', 'El alumno ha sido añadido');
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
    public function update($id, Request $request)
    {
        /*$alumno = Alumno::whereId($id)->firstOrFail();
        $alumno->nombre = $request->get('nombre');
        $alumno->curso = $request->get('curso');
        $alumno->edad = $request->get('edad');
        
        if($request->get('status') != null){
            $mensaje->status = 0;
        }else{
            $mensaje->status = 1;
        }
        $mensaje->save();
        
        return redirect()->route('alumnos.index');
        */


        $alumno = Alumno::find($id);
        $alumno->fill($request->all());
        
        if($request->get('status') != null){
            $mensaje->status = 0;
        }else{
            $mensaje->status = 1;
        }
        $mensaje->save();
        
        return redirect()->route('alumnos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alumno = Alumno::whereId($id)->firstOrFail();
        $alumno->delete();
        return redirect('alumnos')->with('stat', 'El alumno ' . $id . ' Ha sido eliminado');
        
    }
    public function add(){
        return view('addalumno');
    }
    public function edit($id)
    {
        //$alumno = Alumno::whereId($id)->firstOrFail();
        //return view('modalumno', compact('alumno'));
        $alumno = Alumno::find($id);
        return view('modalumno',['alumno'=>$alumno]);
    }
    public function elim($id)
    {
        //    
    }

    public function devuelve(){
        return Alumno::get();
    }
}

