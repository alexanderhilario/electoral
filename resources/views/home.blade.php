@extends('loyout')

@section('content')

<section class="jumbotron text-center">
    <div class="container">
      <h1 class="jumbotron-heading">Bienvenido al sistema electoral,  {{ Auth::user()->name }}</h1>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h5>Listado de puestos electivos</h5>
            </div>
            <div class="col-md-6">
                <a href="" class="btn btn-primary" data-toggle="modal" data-target="#agregar" style="float: right !important;"><i class="fa fa-plus"></i> Agregar puesto</a>
            </div>
        </div>
        
        <hr>
         <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Puesto electivo</th>
              <th>Descripción</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            @foreach($puesto as $puestos)
            <tr>
              <th scope="row">{{ $puestos->id }}</th>
              <td>{{ $puestos->nombre }}</td>
              <td>{{ $puestos->descripcion }}</td>
              <td>
                <a href="#"  data-toggle="modal" data-target="#edit-puesto{{ $puestos->id }}" class="btn btn-warning">
                    <i class="fa fa-pencil"></i>
                </a>
               </td>
            </tr>
            @endforeach
          </tbody>
        </table>
    </div>
</section>

@include('partials.agregar-electivo-p')

@foreach($puesto as $puestos)
    @if(! empty($puestos))
        @include('partials.edit-p')
    @endif
@endforeach

@endsection
