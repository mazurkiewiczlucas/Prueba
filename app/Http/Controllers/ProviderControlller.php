<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ServicioFormRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\servicio;
use App\Perfil;
use Illuminate\Support\Facades\Mail;

class ProviderControlller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // $idusuario = Auth::user()->id;
      $servicio = Servicio::all();
    return view('provider.myservice', compact('servicio'));
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

    public function indexprovider()
    {
      $idusuario = Auth::user()->id;
      $perfil = Perfil::whereuser_id($idusuario)->get();
      return view('provider.myperfil', compact('perfil'));
    }

    public function setprovider(Request $request)
    {
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
        return redirect("provider")->with('status', 'Su perfi fue creado.');

      }
    }

    public function createprovider()
    {
      return view("provider.setprovider");
    }



    public function updateprovider(Request $request, Perfil $perfil)
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
      // $this->$perfil->nombre = 'pepe';
      // $this->$perfil->apellido= 'pupu';

      // $this->$perfil->save();

    $perfil->save();
        return redirect("provider")->with('status', 'Su perfil fur actualizado');

    }

    public function editprovider(Perfil $perfil )
    {
      $idusuario = Auth::user()->id;
      $perfil = Perfil::whereuser_id($idusuario)->firstOrFail();
      return view('provider.editprovider', compact('perfil'));
    }


}
