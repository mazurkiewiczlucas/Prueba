<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ServicioFormRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\servicio;
use App\User;
use Illuminate\Support\Facades\Mail;




class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $idusuario = Auth::user()->id;
          $servicio = Servicio::whereuser_id($idusuario)->get();
        return view('client.misservicios', compact('servicio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('client');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

      if(!empty($_POST['customRadio'])) {
      $checked_contador = count($_POST['customRadio']);
      foreach($_POST['customRadio'] as $seleccion) {
        }
      }
        $dias_de_trabajo = $request->input('customRadio');
        $dias =implode(", ", $dias_de_trabajo);

        $precio_servicio=$request->get('cantidad_de_horas_diarias')*125*$checked_contador;
        $estado_de_servicio= 'estado_de_servicio';
        $comision = $precio_servicio*0.1;
        $slug = uniqid();
        $idusuario = Auth::user()->id;



        $servicio = new Servicio(array(
          'service_id'=>$slug,
          'user_id'=> $idusuario,
          'tipo_de_service' => $request->get('tipo_de_service'),
          'cantidad_de_horas_diarias' => $request->get('cantidad_de_horas_diarias'),
          'dias_de_la_semana'=> $dias,
          'hora_de_inicio'=> $request->get('hora_de_inicio'),
          'localidad_servicio'=> $request->get('localidad_servicio'),
          'precio_de_servicio'=>$precio_servicio,
          'comision'=> $comision,
          'estado_de_servicio'=> $estado_de_servicio,

        ));
        return redirect('/cotizador')->with('servicio', $servicio);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
      $servicio = Servicio::whereservice_id($slug)->firstOrFail();
      return view('client.service', compact('servicio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function GuardarServicio(Request $request)
     {

         $slug = uniqid();
         $idusuario = Auth::user()->id;
         $servicio = new Servicio;
          $servicio->service_id=$slug;
          $servicio->user_id= $idusuario;
          $servicio->tipo_de_service = $request->get('tipo_de_service');
          $servicio->cantidad_de_horas_diarias = $request->get('cantidad_de_horas_diarias');
          $servicio->dias_de_la_semana = $request->get('cantidad_de_dias');
          $servicio->hora_de_inicio = $request->get('horario_de_inicio');
          $servicio->localidad_servicio = $request->get('localidad_servicio');
          $servicio->precio_de_servicio = $request->get('precio_de_servicio');
          $servicio->comision = $request->get('localidad_servicio');
          $servicio->estado_de_servicio = "estado de servicio";
         $servicio->save();

         return redirect("misservicios")->with('status', 'Su servicio fue reservado correctamente, revise su correo por favor.');
     }


    public function edit($slug)
    {

                // return view('client.editservice', compact('servicio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function preconfirm($slug, Request $request, Servicio $servicio)
     {
       $servicio = Servicio::whereservice_id($slug)->firstOrFail();
       return view('provider.preconfirm', compact('servicio'));
     }




    public function takeservice($slug, Request $request, Servicio $servicio)
    {
      $idusuario = Auth::user()->id;
      $servicio = Servicio::whereservice_id($slug)->firstOrFail();
          $servicio->  keeper= $idusuario;
          $servicio->save();
          return redirect("myservice")->with('status', 'Has tomando un nuevo cliente. Por favor, revisa tu correo.');

        }


}
