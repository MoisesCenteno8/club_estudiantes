@extends('template')

@section('contenido')
<h1 class="text-center text-primary">Integrantes</h1>

<a href="{{url('/formulario')}}" class="btn btn-dark">Ingresa al club!</a>
@foreach ($integrantes as $item)

<div class="col-sm-6 mb-3 mb-sm-0">
  <div class="card" style="width: 18rem">
  
    <div class="card-body">
      <h5 class="card-title">{{$item -> nombre}}</h5>
      <p class="card-text"  >{{$item -> seccion}}</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
    
  </div>
</div>

  @endforeach
@endsection