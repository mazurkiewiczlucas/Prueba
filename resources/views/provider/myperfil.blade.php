@include('layouts.app')



<div class="container shadow-lg">
    <div class="row">
      <div class="col-md-3 sections-column">
          <div class="section-button">
            <div class="text">
            <a class="nav-link" href="{{ route('myservice') }}">  Mis servicios </a>
            </div>
          </div>
          <div class="section-button">
              <div class="text">
              <a class="nav-link" href="{{ route('myhistorial') }}">  Mi historial</a>
              </div>
            </div>
          <div class="section-button">
               <div class="text">
              <a class="nav-link" href="{{ route('myperfil') }}">   Mi perfil </a>
               </div>
             </div>
          <div class="section-button">
                <div class="text">
              <a class="nav-link" href="{{ route('contact') }}">    Contacto </a>
                </div>
              </div>
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
            <a href="{{ route('setprovider') }}">    <button type="submit" class="btn btn-primary btn-lg">Completar perfil para comenzar</button></a>

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
                    <a href="{{ action('ProviderControlller@editprovider') }}">  <button type="submit" class="btn btn-primary btn-lg">Editar Perfil</button></a>

                    @endforeach
                  </tbody>
                </table>
                        </div>
                        @endif
                      </div><br><br>


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
          <div id="miperfil" class="col-md-7" style="display: none;">

                            <form class="" action="##" method="post" id="registrationForm">
                                <div class="form-group">

                                    <div class="">
                                        <label for="first_name"><h4>Nombres</h4></label>
                                        <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Ingrese sus nombre.">
                                    </div>
                                </div>
                                <div class="form-group">

                                    <div class="col-xs-6">
                                      <label for="last_name"><h4>Apellido</h4></label>
                                        <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Ingrese su apellido.">
                                    </div>
                                </div>

                                <div class="form-group">

                                    <div class="col-xs-6">
                                        <label for="phone"><h4>Telefono</h4></label>
                                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Ingese su telefono.">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-xs-6">
                                       <label for="mobile"><h4>Celular</h4></label>
                                        <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Ingrese su celular.">
                                    </div>
                                </div>
                                <div class="form-group">

                                    <div class="col-xs-6">
                                        <label for="email"><h4>Email</h4></label>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Ingrese su email.">
                                    </div>
                                </div>
                                <div class="form-group">

                                    <div class="col-xs-6">
                                        <label for="password"><h4>Direccion de servicio</h4></label>
                                        <input type="password" class="form-control" name="password" id="password" placeholder="Ingrese la calle">
                                        <br><input type="password" class="form-control" name="password" id="password" placeholder="Ingrese la altura" >
                                        <br><select class="custom-select my-1 mr-sm-2" id="localidad_servicio">              <!-- Localidad -->
                                          <option selected>Localidad </option>
                                            <option value="cap_fed">Capital Federal</option>
                                              <option value="zona_norte">Zona Norte</option>
                                                <option value="zona_sur">Zona Sur</option>
                                                  <option value="zona_oeste">Zona Oeste</option>
                                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">

                                    <div class="col-xs-6">
                                      <label for="password2"><h4>Entre calles</h4></label>
                                        <input type="password" class="form-control" name="password2" id="password2" placeholder="Ingese entre calle 1.">
                                        <br>  <input type="password" class="form-control" name="password2" id="password2" placeholder="Ingese entre calle 2." >
                                    </div>
                                </div>

                                <div class="form-group">
                                     <div class="col-xs-12">
                                          <br>
                                        	<button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Guardar</button>
                                  </div>
                                </div>
                        	</form>
                 </div>
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
                                          <button type="submit" name="Enviar"class="btn btn-primary btn-lg">Enviar</button>
                                      </div>
                                  </div>

                              </fieldset>
                          </form>
                        </form>
                      </div>
                    </div>
                  </div>



    @include('layouts.footer')
