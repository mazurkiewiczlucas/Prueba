<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ServicioFormRequest;
use App\servicio;
use Illuminate\Support\Facades\Auth;


class PageController extends Controller
{
   public function registerprovider()
    {
        return view('registerprovider');
    }

    public function contacto()
     {
         return view('client.contacto');
     }

     public function miperfil()
      {
          return view('client.miperfil');
      }

      public function editperfil()
       {
           return view('client.editperfil');
       }

      public function misservicios()
       {
           return view('client.misservicios');
       }

       public function cotizador()
      {
          return view('client.cotizador');
      }
      public function provider()
     {
         return view('provider');
     }
      public function myservice()
     {
         return view('provider.myservice');
     }
     public function myperfil()
    {
        return view('provider.myperfil');
    }
    public function myhistorial()
   {
       return view('provider.myhistorial');
   }
   public function contact()
  {
      return view('provider.contact');
  }

}
