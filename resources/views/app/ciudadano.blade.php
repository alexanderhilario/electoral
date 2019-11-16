@extends('loyout')

@section('content')

<section class="jumbotron text-center">
    <div class="container">
      <h1 class="jumbotron-heading">Ciudadanos</h1>
    </div>
  </section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h5>Listado de ciudadanos</h5>
            </div>
            <div class="col-md-6">
                <a href="" class="btn btn-primary" data-toggle="modal" data-target="#agregarc" style="float: right !important;"><i class="fa fa-plus"></i> Agregar ciudadano</a>
            </div>
        </div>
        
        <hr>
         <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Cedula</th>
              <th>Nombre</th>
              <th scope="col">Email</th>
              <th>Estado</th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach($ciudadano as $ciudadanos)
            <tr>
              <th scope="row">{{ $ciudadanos->id }}</th>
              <td>{{ $ciudadanos->cedula }}</td>
              <td>{{ $ciudadanos->nombre }}</td>
              <td>{{ $ciudadanos->email }}</td>
              <td>
                @if($ciudadanos->estado == 1)
                  Activo
                  @else
                  Inactivo
                  @endif
                </td>
              <td>
                <a href=""  data-toggle="modal" data-target="#agregar-{{ $ciudadanos->id }}c"  class="btn btn-warning"><i class="fa fa-pencil"></i></a>
              </td>
              <td>
                <a href=""  data-toggle="modal" data-target="#delete-{{ $ciudadanos->id }}c" class="btn btn-danger"><i class="fa fa-trash"></i></a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
    </div>
</section>

@foreach($ciudadano as $ciudadanos)
   @include('partials.edit-c')
@endforeach


@foreach($ciudadano as $ciudadanos)
   @include('partials.delete-c')
@endforeach

@include('partials.add-ciudadano')
@endsection