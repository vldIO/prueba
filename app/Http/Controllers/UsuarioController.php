<?php

namespace App\Http\Controllers;


use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use Illuminate\Http\Request;
use Session;
use Redirect;
use App\User;
use Illuminate\Routing\Route;


class UsuarioController extends Controller
{
    /*
    public function _construct(){
        $this->beforeFilter('@find',['only' => ['edit','update','destroy']]);
    }

    public function find(Route $route){
        $this->user = User::find($route->getParameter('usuario'));
        return $this->user;
    }
    
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        //$usuarios = Usuario::onlyTrashed()->paginate(3);
        $users = User::paginate(3);
        return view('user.index', compact('users'));
    }

    public function create()
    {
        return view('usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreateRequest $request)
    {
        /*User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => $request['password'],
        ]);
        return redirect('/usuario')->with('message','store');
        */
        User::create($request->all());
        Session::flash('message','Usuario Guardado Correctamente');
        return Redirect::to('/');
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
    public function update($id, UserUpdateRequest $request)
    {
        $user = User::find($id);
        $user->fill($request->all());
        $user->save();

        Session::flash('message','Usuario Editado Correctamente');
        return Redirect::to('/usuario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /*User::destroy($id);
        Session::flash('message','usuario eliminado correctamente');
        return Redirect::to('/usuario');*/
        $user = User::find($id);
        $user->delete();
        Session::flash('message','usuario eliminado correctamente');
        return Redirect::to('/usuario');
    }
    public function edit($id)
    {
        $user = User::find($id);
        return view('user.edit',['user'=>$user]);
    }
    public function devuelve(){
        return User::get();
    }
}
