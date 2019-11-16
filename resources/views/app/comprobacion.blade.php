@extends('loyout')

@section('content')

<section class="jumbotron text-center">
    <div class="container">
      <h1 class="jumbotron-heading">Digite su cédula</h1>
      <form>
      	<div class="form-group">
      		<input class="form-control" type="text" name="cedula" value="{{ request('cedula') }}">
      	</div>
      	<button class="btn btn-primary">
      		Comprobar
      	</button>
      </form>
      @if(!empty($comprobacion))
      <p>
        @if($comprobacion->estado == 2) 
          <p style="color:red;">Los sentimos ya usted voto</p>
        @endif
      </p>
      @else
      <p><small>Digite su número de cédula para comprobar si está hábil para votar.</small></p>
      @endif
    </div>
  </section>
@endsection