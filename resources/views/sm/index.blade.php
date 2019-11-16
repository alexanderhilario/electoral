@extends('sm.layout')

@section('content')
<main role="main" class="container">
<div class="jumbotron jumbotron-fluid" style="
    background: #181015 url(sm/img/portada.jpeg) no-repeat;
    background-size: cover;
    min-height: 400px;
    color: white;">

</div>

@include('sm.partials.title')
   <section class="jumbotron1 text-center">
    <div class="container">
      <h2 class="jumbotron-heading title1" style="color: #fff;">PARTIDO POLITICO</h2>
    </div>
  </section>
  <div class="album bg-light">
    <div class="container">

      <div class="row">
        @foreach($partido as $partidos)
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">

          	<a   href="{{ route('confirmar', $partidos->id) }}" >

              @if($partidos->id == 1)
          		<img src="{{ asset('sm/img/abanico.png') }}" alt="..." class="img-thumbnail">
              @endif
              @if($partidos->id == 2)
              <img src="{{ asset('sm/img/prm.png') }}" alt="..." class="img-thumbnail">
              @endif
              @if($partidos->id == 3)
              <img src="{{ asset('sm/img/no-deseo.png') }}" alt="..." class="img-thumbnail">
              @endif
          	</a>
            <div class="card-body">
              <p class="card-text">
              	{{ $partidos->partido }}
              </p>
            </div>
          </div>
        </div>
        @endforeach


      </div>
    </div>
  </div>

</main>

@endsection