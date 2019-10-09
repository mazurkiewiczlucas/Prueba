<?php

namespace App\Http\Controllers;

use App\Perfil;
use App\Http\Requests\ServicioFormRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $idusuario = Auth::user()->id;
      $perfil = Perfil::whereuser_id($idusuario)->get();
      return view('client.miperfil', compact('perfil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('client.setperfil');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $idusuario = Auth::user()->id;
      $email = Auth::user()->email;



      $perfil = new Perfil;
      $perfil->  user_id= $idusuario;
      $perfil->  nombre = $request->get('first_name');
      $perfil->  apellido=  $request->get('last_name');
      $perfil->  telefono= $request->get('phone');
      $perfil->  celular= $request->get('mobile');
      $perfil->  email= $email;
      $perfil->  direccion=$request->get('direccion_calle');
      $perfil->  altura_direccion= $request->get('direccion_altura');
      $perfil->  localidad_servicio= $request->get('localidad_servicio');
      $perfil->  entrecalle1= $request->get('entrecalle1');
      $perfil->  entrecalle2= $request->get('entrecalle2');


      $perfil->save();
      return redirect("client")->with('status', 'Su perfi fue creado.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function show(Perfil $perfil)
    {
    //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function edit(Perfil $perfil )
    {
      $idusuario = Auth::user()->id;
      $perfil = Perfil::whereuser_id($idusuario)->firstOrFail();
      return view('client.editperfil', compact('perfil'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perfil $perfil)
    {
      $user_id = Auth::user()->id;

      $perfil = Perfil::where('user_id',$user_id)->first();
      $perfil->  telefono= $request->get('phone');
      $perfil->  celular= $request->get('mobile');
      $perfil->  direccion=$request->get('direccion_calle');
      $perfil->  altura_direccion= $request->get('direccion_altura');
      $perfil->  localidad_servicio= $request->get('localidad_servicio');
      $perfil->  entrecalle1= $request->get('entrecalle1');
      $perfil->  entrecalle2= $request->get('entrecalle2');


    $perfil->save();
        return redirect("client")->with('status', 'Su perfil fur actualizado');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perfil $perfil)
    {
        //
    }
}
