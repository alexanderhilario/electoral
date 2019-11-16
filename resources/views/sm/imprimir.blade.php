@extends('sm.layout')

@section('content')
<main role="main" class="container">


  @include('sm.partials.title')
   <section class="jumbotron1 text-center">
    <div class="container">
      <h2 class="jumbotron-heading title1" style="color: #fff;">PARTIDO POLITICO</h2>
    </div>
  </section>
  <div class="album bg-light">
    <div class="container">
      <br>
      <div style="text-align: center;">
        <h5 class="card-title">Usted selecciono los siguentes candidatos</h5>
      </div>
      <br>
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">Cargo(s)</th>
              <th scope="col">Candidato(s)</th>
            </tr>
          </thead>
          <tbody>
            @foreach($candidato as $candidatos)
            <tr>
              <td>{{ $candidatos->stipo->tipo }}</td>
              <td>{{ $candidatos->candidato }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <br>
      <div style="">
        <a href="{{ route('delete-voto') }}" class="btn btn-secondary">Volver a empezar</a>
        <a href="{{ route('delete-voto') }}" class="btn btn-info" style="float: right;">Imprimir</a>
      </div>
      <br>
    </div>
  </div>

</main>

@endsection