@extends('loyout')

@section('content')

<section class="jumbotron text-center">
    <div class="container">
      <h1 class="jumbotron-heading">{{ $elecciones->nombre }}</h1>
    </div>
  </section>

  <section>
  	<div class="container">
  		<div class="row">
  			@foreach($elecciones->candidato as $candidatos)
	  		<div class="col-md-2">
	  			<a href="{{ route('votar',[$candidatos->id]) }}" style="color: #000;">
		  			<img src="">
		  			<p><b>{{ $candidatos->nombre }} {{ $candidatos->apellido }}</b></p>
	  			</a>
	  		</div>
  			@endforeach
  		</div>
  	</div>
  </section>

@endsection