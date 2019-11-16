@extends('sm.layout')

@section('content')
<main role="main" class="container">

   @include('sm.partials.title')
  <section class="jumbotron1 text-center">
    <div class="container">
       <div class="jumbotron-heading title1">
         <h3 style="text-align: center;">
            <span style="font-size:14px; color:#fff; font-family:verdana;">
            Nivel: @if($candidato->stipo_id == 1) Nacional
                   @else
                   Congresional
                   @endif
            </span>
            <br>
            <span style="font-size:22px; color:#fff; font-family:verdana;">
              <p style="text-align: center; margin-bottom: 0rem;">
              
              @if($candidato->stipo_id == 1) PRESIDENTE(A)
                   @else
                   DIPUTADO(A)
                   @endif
              </p>
            </span>
        </h3>
      </div>
    </div>
  </section>
  <section>
    <div class="container">
       <div class="menu">
        <div class="row">
          <div class="col-md-3" style="background-color: #c82333;
    border-color: #bd2130;">
            <div class="cont">
              
               <a  @if($candidato->stipo_id == 1) 
                href="{{ route('presidente', $candidato->spartido_id) }}" 
                @else 
                href="{{ route('diputado', $candidato->spartido_id) }}" 
                @endif style="color: #fff; text-decoration: none;">REGRESAR</a>

            </div>
          </div>
          <div class="col-md-6" style="background-color: #5d5d57 !important;">
            <div class="cont">
               TOQUE NUEVAMENTE EL RECUADRO PARA CONFIRMAR 
            </div>
          </div>
          <div class="col-md-3" style="background-color: #28a745!important;">
            <div class="cont">
               <a @if($candidato->stipo_id == 1) 
                href="{{ route('add-voto-presidente',$candidato->id) }}" 
                @else 
                href="{{ route('add-voto-diputado',$candidato->id) }}" 
                @endif  
                style="color: #fff; text-decoration: none;">CONTINUAR</a>
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
          <a  @if($candidato->stipo_id == 1) href="{{ route('add-voto-presidente',$candidato->id) }}" @else href="{{ route('add-voto-diputado',$candidato->id) }}"  @endif style="text-decoration: none;">
              <img src="{{ asset('sm/img/'. $candidato->img) }}" class="rounded mx-auto d-block" style="max-width: 100%; @if($candidato->id == 7) border: 2px solid #000; @endif" >

             <p class="card-text" style="color: #000;">
                {{ $candidato->candidato }}
              </p>

              <p class="card-text" style="color: #000;">
                {{ $candidato->stipo->tipo }}
              </p>
          </a>
        </div>

      </div>
    </div>
  </div>

</main>

@endsection