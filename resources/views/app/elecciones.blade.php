@extends('loyout')

@section('content')

<section class="jumbotron text-center">
    <div class="container">
      <h1 class="jumbotron-heading">Elecciones</h1>
    </div>
  </section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h5>Listado de elecciones</h5>
            </div>
            <div class="col-md-6">
                <a href="" class="btn btn-primary" data-toggle="modal" data-target="#elecciones-add" style="float: right !important;"><i class="fa fa-plus"></i> Agregar elecciones</a>
            </div>
        </div>
        
        <hr>
         <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Eleciones</th>
              <th>Estado</th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
          @foreach($elecciones as $eleccione)
            <tr>
              <th scope="row">
                {{ $eleccione->id }}
              </th>
              <td>{{ $eleccione->nombre }}</td>
              <td>
                 @if($eleccione->estado == 1)
                  Activo
                  @else
                  Inactivo
                  @endif
              </td>
              <td>
                <a href=""  data-toggle="modal" data-target="#elecciones-edit{{ $eleccione->id }}"  class="btn btn-warning"><i class="fa fa-pencil"></i></a>
              </td>
              <td>
                <a href="" data-toggle="modal" data-target="#resultado{{ $eleccione->id }}" class="btn btn-primary">Resultado</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
    </div>
</section>


@foreach($elecciones as $eleccione)
  @include('partials.resultado')
@endforeach

@foreach($elecciones as $eleccione)
   @include('partials.edit-elecciones')
@endforeach

@include('partials.add-elecciones')
@endsection