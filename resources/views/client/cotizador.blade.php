@include('layouts.app')



<div class="container shadow-lg">
    <div class="row">
      <div class="col-md-3 sections-column">
          <div class="section-button">
            <div class="text">
            <a class="nav-link" href="{{ route('client') }}">  Cotizar un nuevo servicio </a>
            </div>
          </div>
          <div class="section-button">
              <div class="text">
              <a class="nav-link" href="{{ route('misservicios') }}">  Mis servicios </a>
              </div>
            </div>
          <div class="section-button">
               <div class="text">
              <a class="nav-link" href="{{ route('miperfil') }}">   Mi perfil </a>
               </div>
             </div>
          <div class="section-button">
                <div class="text">
              <a class="nav-link" href="{{ route('contacto') }}">    Contacto </a>
                </div>
              </div>
            </div>
      <div class="col-md-9 content-column">
          <div id="cotizador" style="display: inline-block;">
            <div class="container" >
                <div class="row ">
                  <div class="col-xl-12 mx-auto inline">
                    <h3>Tu servicio</h3>
                  </div>
                  <form method="post">
                    <input type="hidden" name="_token" value="{!! csrf_token()!!}">
                    @if (session('servicio'))
                  <h4>Tipo de servicio:</h4>      <input type="hidden"readonly name="tipo_de_service" value="{!! session('servicio')->tipo_de_service !!}">{!! session('servicio')->tipo_de_service !!} </input>
                  <h4>Dias:</h4>                  <input type="hidden"readonly name="cantidad_de_dias"  value="{!! session('servicio')->dias_de_la_semana !!}">{!! session('servicio')->dias_de_la_semana !!}</input>
                  <h4>Horario:</h4>               <input type="hidden"readonly name="horario_de_inicio" value="{!! session('servicio')->hora_de_inicio !!}">{!! session('servicio')->hora_de_inicio !!}</input>
                  <h4>Cantidad de horas:</h4>     <input type="hidden"readonly name="cantidad_de_horas_diarias" value="{!! session('servicio')->cantidad_de_horas_diarias !!}">{!! session('servicio')->cantidad_de_horas_diarias !!}hs </input>
                  <h4>Direccion: </h4>DIRECCION</h4>
                  <h4>Localidad:</h4>             <input type="hidden"readonly name="localidad_servicio"  value="{!! session('servicio')->localidad_servicio !!}">{!! session('servicio')->localidad_servicio !!}</input>
                  <h4>Precio:</h4> $              <input type="hidden"readonly name="precio_de_servicio" value="{!! session('servicio')->precio_de_servicio !!}">{!! session('servicio')->precio_de_servicio !!}</input>
                  <button type="submit"  class="btn btn-primary btn-lg btn-block">Confirmar!</button>

                        </form>
                        @endif
                      </div>
                    </div>
                  </div>
                </div>
              </div>




    @include('layouts.footer')
