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
          <div id="cotizador" style="display: none;">
            <div class="container" >
                <div class="row ">
                  <div class="col-xl-12 mx-auto ">
                    <h3>Cotiza un servicio</h3>
                  </div>

                  <!-- Formulario de cotizacion -->

              <form id="form_cotizador" method="GET">
                <select class="custom-select my-1 mr-sm-2" name="tipo_de_service" id="tipo_de_service">                  <!-- Tipo de Service -->
                            <option selected>Tipo de servicio</option>
                              <option value="7">Cuidado de personas</option>
                                <option value="8">Limpieza del hogar</option>
                                  <option value="8">Limpieza de oficinas</option>

                              </select>
                <select class="custom-select my-1 mr-sm-2" name="cantidad_de_horas_diarias" id="cantidad_de_horas_diarias">        <!-- Cantidad de horas -->
                        <option selected>Cantidad de horas diarias...</option>
                          <option value="125">1</option>
                            <option value="250">2</option>
                              <option value="375">3</option>
                                <option value="500">4</option>
                                  <option value="625">5</option>
                                    <option value="750">6</option>
                                      <option value="875">7</option>
                                        <option value="1000">8</option>

                                  </select>
                <div class="col-xl-12 mx-auto text-center" name="dias_de_la_semana" id="dias_de_la_semana">                <!-- Dias a la semana -->
                   <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Dias a la semana.</label>
                  </div>
                    <div >
                                  <div class="custom-control custom-radio">
                                    <input type="checkbox" id="id_lunes" name="customRadio" class="custom-control-input">
                                      <label class="custom-control-label" for="id_lunes">Lunes</label>
                                  </div>
                                  <div class="custom-control custom-radio ">
                                        <input type="checkbox" id="id_martes" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="id_martes">Martes</label>
                                  </div>
                                  <div class="custom-control custom-radio">
                                                <input type="checkbox" id="id_miercoles" name="customRadio" class="custom-control-input">
                                                <label class="custom-control-label" for="id_miercoles">Miercoles</label>
                                              </div>
                                  <div class="custom-control custom-radio">
                                                <input type="checkbox" id="id_jueves" name="customRadio" class="custom-control-input">
                                                <label class="custom-control-label" for="id_jueves">Jueves</label>
                                              </div>
                                  <div class="custom-control custom-radio">
                                                <input type="checkbox" id="id_viernes" name="customRadio" class="custom-control-input">
                                                <label class="custom-control-label" for="id_viernes">Viernes</label>
                                              </div>
                                  <div class="custom-control custom-radio">
                                                <input type="checkbox" id="id_sabado" name="customRadio" class="custom-control-input">
                                                <label class="custom-control-label" for="id_sabado">Sabado</label>
                                              </div>
                                  <div class="custom-control custom-radio">
                                                            <input type="checkbox" id="id_domingo" name="customRadio" class="custom-control-input">
                                                            <label class="custom-control-label" for="id_domingo">Domingo</label>
                                                          </div>
                      </div>
                <select class="custom-select my-1 mr-sm-2" name="hora_de_inicio" id="hora_de_inicio">                   <!-- Hora de Inicio -->
                            <option selected>Hora de inicio...</option>
                              <option value="7">7:00</option>
                                <option value="8">8:00</option>
                                  <option value="9">9:00</option>
                                    <option value="10">10:00</option>
                                      <option value="11">11:00</option>
                                        <option value="12">12:00</option>
                                          <option value="13">13:00</option>
                                            <option value="14">14:00</option>
                                              <option value="15">15:00</option>
                                                <option value="16">16:00</option>
                                                  <option value="17">17:00</option>
                                                    <option value="18">18:00</option>
                                                      <option value="19">19:00</option>
                                                        <option value="20">20:00</option>
                                                          <option value="21">21:00</option>
                              </select>
                <select class="custom-select my-1 mr-sm-2"name="localidad_servicio" id="localidad_servicio">               <!-- Localidad -->
                  <option selected>Localidad </option>
                    <option value="cap_fed">Capital Federal</option>
                      <option value="zona_norte">Zona Norte</option>
                        <option value="zona_sur">Zona Sur</option>
                          <option value="zona_oeste">Zona Oeste</option>
                                </select>

                                <button type="submit" onClick="contar()" class="btn btn-primary btn-lg btn-block">Cotizar!</button>
               </form>

                            </div>
                          </div>


          </div>
          <div id="misservicios" class="table-responsive" style="display: none;">
            <h3>Mis servicios</h3>
                      <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">ID servicio</th>
                            <th scope="col">Direccion</th>
                            <th scope="col">Horas</th>
                            <th scope="col">Dias</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Keeper</th>
                    <th scope="col">Estado</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">$variable</th>
                    <td>$variables</td>
                    <td>$variables</td>
                    <td>$variables</td>
                    <td>$variables</td>
                    <td>$variables</td>
                    <td>$variables</td>
                  </tr>
                </tbody>
              </table>
                      </div>
          <div id="miperfil" class="col-md-7" style="display: inline-block;">
            @if (session('status'))
              <div class="alert alert-success">
                {{session('status')}}
              </div>
            @endif
            <h3>Mi Perfil</h3>
            @if($perfil->isEmpty())
              <p>Completa ahora tu perfil.</p><br><br>
          <a href="{{ route('setperfil') }}">    <button type="submit" class="btn btn-primary btn-lg">Completar perfil</button></a>

              @else

                  @foreach($perfil as $perfil)
                  <tr>
                  <h5> Nombre: <td>{!! $perfil->nombre !!}</td></h5>
                  <h5> Apellido: <td>{!! $perfil->apellido !!}</td></h5>
                  <h5> Telefono: <td>{!! $perfil->telefono !!}</td></h5>
                  <h5> Celular: <td>{!! $perfil->celular !!}</td></h5>
                  <h5> Email: <td>{!! $perfil->email !!}</td></h5>
                  <h5> Direccion: <td>{!! $perfil->direccion !!} {!! $perfil->altura_direccion !!}</td></h5>
                  <h5> Localidad: <td>{!! $perfil->localidad_servicio !!}</td></h5>
                  <h5> Entercalle 1: <td>{!! $perfil->entrecalle1 !!}</td></h5>
                  <h5> Entercalle 2: <td>{!! $perfil->entrecalle2 !!}</td></h5>
                  </tr>
                  <a href="{{ action('PerfilController@edit') }}">  <button type="submit" class="btn btn-primary btn-lg">Editar Perfil</button></a>

                  @endforeach
                </tbody>
              </table>
                      </div>
                      @endif
                    </div><br><br>
          <div id="contact" class="col-md-9"  style="display: none;">
              <form class="form-horizontal" method="post">
                              <fieldset>
                                  <h3>Contactanos</h3>

                                <h4>Ingrese su consulta y a la breveda nos pondremos en contacto con usted. </h4>
                                <select class="custom-select my-1 mr-sm-2" id="hora_de_inicio">                  <!-- Hora de Inicio -->
                                            <option selected>Problemas con facturacion</option>
                                              <option value="7">Consultas sobre mi Keeper</option>
                                                <option value="8">Tengo un reclamo</option>
                                                  <option value="8">Quiero hacer una consulta</option>

                                              </select>
                                  <div class="form-group">
                                      <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                                      <div class="col-md-12 col-sm-6">
                                          <textarea class="form-control" name="message" placeholder="Por favor, ingrese aqui lo que desee," rows="7"></textarea>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      <div class="col-md-12 text-center">
                                          <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                                      </div>
                                  </div>
                              </fieldset>
                          </form>
                        </form>
                      </div>
                    </div>
                  </div>

    <script type="text/javascript">       <!-- //script cotizador -->
         function contar() {
          var obj = document.getElementById("cantidad_de_horas_diarias");

          var checkboxes = document.getElementById("form_cotizador").customRadio;
            var cont = 0; //Variable que lleva la cuenta de los checkbox pulsados
              for (var x=0; x < checkboxes.length; x++) {
                  if (checkboxes[x].checked) {
                    cont = cont + 1;
                  }
                }

          var suma = (+cont * obj.options[obj.selectedIndex].value);

        document.getElementById('resultado').innerHTML = suma;
        }
    </script>

    @include('layouts.footer')
