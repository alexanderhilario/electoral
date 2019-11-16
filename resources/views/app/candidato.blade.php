@extends('loyout')

@section('content')

<section class="jumbotron text-center">
    <div class="container">
      <h1 class="jumbotron-heading">Candidatos</h1>
    </div>
  </section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h5>Listado de candidatos</h5>
            </div>
            <div class="col-md-6">
                <a href="" class="btn btn-primary" data-toggle="modal" data-target="#candidatos-add" style="float: right !important;"><i class="fa fa-plus"></i> Agregar candidatos</a>
            </div>
        </div>
        
        <hr>
         <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nombre</th>
              <th>Apellido</th>
              <th scope="col">Estado</th>
              <th>Partido</th>
              <th>Puesto</th>
              <th>Elecciones</th>
              <th>Votos</th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
          @foreach($candidato as $candidatos)
            <tr>
              <th scope="row">{{ $candidatos->id }}</th>
              <td>{{ $candidatos->nombre }}</td>
              <td>{{ $candidatos->apellido }}</td>
              <td>
                @if($candidatos->estado == 1)
                  Activo
                  @else
                  Inactivo
                  @endif
                </td>
                <td>{{ $candidatos->partido->nombre }}</td>
                <td>{{ $candidatos->puesto->nombre }}</td>
                <td>{{ $candidatos->eleccione->nombre }}</td>
                <td>{{ $candidatos->votos }}</td>
              <td>
                <a href=""  data-toggle="modal" data-target="#candidatos-edit{{ $candidatos->id }}"  class="btn btn-warning"><i class="fa fa-pencil"></i></a>
              </td>
              <td>
                <a href=""  data-toggle="modal" data-target="#delete-candidato{{ $candidatos->id }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
    </div>
</section>

@foreach($candidato as $candidatos)
   @include('partials.edit-candidato')
@endforeach


@foreach($candidato as $candidatos)
   @include('partials.delete-candidato')
@endforeach

@include('partials.add-candidato')
@endsection