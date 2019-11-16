@extends('sm.layout')

@section('content')
<main role="main" class="container">

  @include('sm.partials.title')
   <section class="jumbotron1 text-center">
    <div class="container">
      <h2 class="jumbotron-heading title1" style="color: #fff;">PARTIDO POLITICO</h2>
    </div>
  </section>
  <section>
    <div class="container">
       <div class="menu">
        <div class="row">
          <div class="col-md-3" style="background-color: #c82333;
    border-color: #bd2130;">
            <div class="cont">
               <a href="{{ route('simulador') }}" style="color: #fff; text-decoration: none;">REGRESAR</a>
            </div>
          </div>
          <div class="col-md-6" style="background-color: #5d5d57 !important;">
            <div class="cont">
               TOQUE NUEVAMENTE EL RECUADRO PARA CONFIRMAR 
            </div>
          </div>
          <div class="col-md-3" style="background-color: #28a745!important;">
            <div class="cont">
               <a @if($partido->id == 3) href="{{ route('simulador') }}" @else href="{{ route('presidente',$partido->id) }}" @endif style="color: #fff; text-decoration: none;">CONTINUAR</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <a @if($partido->id == 3) href="{{ route('simulador') }}" @else href="{{ route('presidente',$partido->id) }}" @endif style="text-decoration: none;">
            @if($partido->id == 1)
              <img src="{{ asset('sm/img/abanico.png') }}" class="rounded mx-auto d-block" style="max-width: 100%;">
              @endif
              @if($partido->id == 2)
              <img src="{{ asset('sm/img/prm.png') }}" class="rounded mx-auto d-block" style="max-width: 100%;">
              @endif
              @if($partido->id == 3)
              <img src="{{ asset('sm/img/no-deseo.png') }}" class="rounded mx-auto d-block" style="max-width: 100%;">
              @endif
           <p class="card-text" style="color: #000;">
                {{ $partido->partido }}
              </p>
          </a>
        </div>
      </div>
    </div>
  </div>

</main>

@endsection