<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumno;
use Redirect;
use DB;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$alumnos = Alumno::paginate(5);
        return $alumnos = Alumno::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Alumno::create($request->all());
        
        //return redirect('alumnos')->with('status', 'El alumno ha sido añadido');
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
        $alumno = Alumno::find($id)
                ->where('id', $id)
                ->update([
                    'nombre' => $request->nombre,
                    'curso' => $request->curso,
                    'edad' => $request->edad,
                ]);
        
        return $alumno;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /*
        $alumno = Alumno::destroy($id);
        $alumno = Alumno::find($id);
        */
        $alumno = Alumno::whereId($id)->firstOrFail();
        $alumno->delete();
        return $alumno;
        
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

