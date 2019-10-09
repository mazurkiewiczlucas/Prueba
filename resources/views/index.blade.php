@extends('layouts.app')

@section('content')

    <header class="col-xl-8 shadow-lg p-3 mb-5 bg-black rounded mx-auto text-center masthead text-black" style="margin-top: 3%;">
          @include('layouts.cotizador')
    </header>
    <section class="testimonials text-center bg-light col-xl-11 shadow-lg p-3 mb-5 bg-white rounded mx-auto text-center masthead ">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src="img/testimonials-1.jpg" alt="">
              <h5>La seguridad es lo primero. texto</h5>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src="img/testimonials-2.jpg" alt="">
              <h5>"Servicios cubiertos"</h5>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src="img/testimonials-3.jpg" alt="">
              <h5>Texto de garantia <a href="#">Aqui</a></h5>
            </div>
          </div>
        </div><button type="submit" style="width: 55%;"class="btn btn-primary btn-lg ">Quiero saber mas!</button>
      </div>
    </section>
        <section class="showcase col-xl-11 shadow-lg p-3 mb-5 bg-white rounded mx-auto text-center">
            <div class="container-fluid p-0">
              <div class="row no-gutters">

                <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/bg-showcase-1.jpg');"></div>
                <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                  <h2>Registrate para tener tu primer servicio</h2>
                  <p class="lead mb-0">Elegis los dias y horarios que necesitas el servicio, y nosotros elegimos la mejor persona que se adapte a tus necesidades.
                  ¿Tenes alguna duda? Revisa nustras preguntas frecuentes, haciendo clic <a href="#">Aqui</a></p>
                </div>
              </div>
              <div class="row no-gutters">
                <div class="col-lg-6 text-white showcase-img" style="background-image: url('img/bg-showcase-2.jpg');"></div>
                <div class="col-lg-6 my-auto showcase-text">
                  <h2>Registrate para trabajar!</h2>
                  <p class="lead mb-0">Cotiza sin cargo mas arriba, registrate haciendo clic <a href="{{ url('register') }}">Aqui</a> y confirma tu reserva! Asi de facil! =)
                  </p>
                </div>
              </div>
          </section>


          @include('layouts.footer')
@endsection
