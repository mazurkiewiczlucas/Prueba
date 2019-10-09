<div class="container">
    <div class="row ">
      <div class="col-xl-5 mx-auto text-center">
        <h1 class="mb-3" style="color: blue;">Cotiza un servicio</h1>
      </div>

      <!-- Formulario de cotizacion -->
<div class="col-md-12 col-lg-8 col-xl-5 mx-auto text-left">
  <form  method="GET" action="">
  <form class="form-inline" method="GET" action="/">
    <select class="custom-select my-1 mr-sm-2" id="hora_de_inicio">                  <!-- Hora de Inicio -->
                <option selected>Tipo de servicio</option>
                  <option value="7">Cuidado de personas</option>
                    <option value="8">Limpieza del hogar</option>
                      <option value="8">Limpieza de oficinas</option>

                  </select>
    <select class="custom-select my-1 mr-sm-2" id="cantidad_de_horas_diarias">        <!-- Cantidad de horas -->
            <option selected>Cantidad de horas diarias...</option>
              <option value="1">1</option>
                <option value="2">2</option>
                  <option value="3">3</option>
                    <option value="4">4</option>
                      <option value="5">5</option>
                        <option value="6">6</option>
                          <option value="7">7</option>
                            <option value="8">8</option>

                      </select>

            <div class="col-xl-12 mx-auto text-center">
             <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Dias a la semana.</label>
            </div>
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
                                              </div>  <!-- Dias a la semana -->

    <select class="custom-select my-1 mr-sm-2" id="hora_de_inicio">                  <!-- Hora de Inicio -->
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

    <select class="custom-select my-1 mr-sm-2" id="localidad_servicio">              <!-- Localidad -->
      <option selected>Localidad </option>
        <option value="cap_fed">Capital Federal</option>
          <option value="zona_norte">Zona Norte</option>
            <option value="zona_sur">Zona Sur</option>
              <option value="zona_oeste">Zona Oeste</option>
                    </select>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Cotizar!</button>
                   </form>
                  </form>
                </div>
              </div>
            </div>
          </div>
