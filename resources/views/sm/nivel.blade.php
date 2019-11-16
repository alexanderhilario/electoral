@extends('sm.layout')

@section('content')
<main role="main" class="container">

 @include('sm.partials.title')
   <section class="jumbotron1 text-center">
    <div class="container">
       <div class="jumbotron-heading title1">
         <h3 style="text-align: center;">
            <span style="font-size:14px; color:#fff; font-family:verdana;">
            Nivel: {{ $title1 }} </span>
            <br>
            <span style="font-size:22px; color:#fff; font-family:verdana;">
              <p style="text-align: center; margin-bottom: 0rem;">{{ $title2 }}</p>
            </span>
            <span style="font-size:12px; color:#fff; font-family:verdana;">
            TOQUE EL RECUADRO DE SU PREFERENCIA 
            </span>
        </h3>
      </div>
    </div>
  </section>
  <section>
    <div class="container">
       <div class="menu">
        <div class="row">
        </div>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row">

        @foreach($candidato as $candidatos)
        <div class="col-md-2">
          <a href="{{ route('conf-voto', [$candidatos->id]) }}" style="color: #000 !important;">
            <div class="card">
              <span style="display: flex; justify-content: flex-end;">
                <div style="    position: absolute; margin-left: -2px; background-color: white; width: 26px; height: 27px; border: 1px solid #000;">
                  <p style="font-size: 16px; font-weight: bold; text-align: center;">{{ $candidatos->numero }}</p>
                </div>
              </span>
              <img src="{{ asset('sm/img/'. $candidatos->img) }}" class="card-img-top" alt="..." @if($candidatos->id == 7) style="border: 2px solid;" @endif>
              <div class="card-body" style="text-align: center;">
                <h5 class="card-title" style="font-size: 11px; font-weight: bold; margin-bottom: .50rem;">{{ $candidatos->candidato }}</h5>
                <p class="card-text"style="font-size: 11px; font-weight: bold;">{{ $candidatos->stipo->tipo }}</p>
              </div>
            </div>
          </a>
        </div>
        @endforeach

      </div>
    </div>
  </div>

</main>
@endsection