@extends('loyout')

@section('content')

<section class="jumbotron text-center">
    <div class="container">
      <h1 class="jumbotron-heading">Partidos</h1>
    </div>
  </section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h5>Listado de partidos</h5>
            </div>
            <div class="col-md-6">
                <a href="" class="btn btn-primary" data-toggle="modal" data-target="#agregarpartido" style="float: right !important;"><i class="fa fa-plus"></i> Agregar partido</a>
            </div>
        </div>
        
        <hr>
         <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Partido</th>
              <th>Descripción</th>
              <th>Estado</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
          @foreach($partido as $partidos)
            <tr>
              <th scope="row">{{ $partidos->id }}</th>
              <td>{{ $partidos->nombre }}</td>
              <td>{{ $partidos->descripcion }}</td>
              <td>
                @if($partidos->estado == 1)
                  Activo
                  @else
                  Inactivo
                  @endif
                </td>
              <td>
                <a href=""  data-toggle="modal" data-target="#editarpartido{{ $partidos->id }}"  class="btn btn-warning"><i class="fa fa-pencil"></i></a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
    </div>
</section>

@foreach($partido as $partidos)
   @include('partials.edit-partido')
@endforeach

@include('partials.add-partido')
@endsection