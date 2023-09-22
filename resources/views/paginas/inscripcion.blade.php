@extends('template')


@section('contenido')

<h1 class="text-center">Se parte de nuestro club</h1>

<form action="{{ route('inscripcion') }}" method="post" enctype="multiplart/form-data">

    @csrf
    <label for="">Nombre</label>
    <input type="text" class="form-control" name="nombre">

    <label for="">Telefono</label>
    <input type="text" class="form-control" name="telefono">

    <label for="">Correo</label>
    <input type="text" class="form-control" name="correo">

    <label for="">Password</label>
    <input type="text" class="form-control" name="password">

    <label for="">Grado (Septimo a Noveno)</label>
    <select name="grado">
        @foreach($grado as $object)
        <option value="{{$object->id}}">{{$object->Nombre}}</option>
        @endforeach

    </select>

    <label for="">Seccion</label>
    <select  name="seccion">
        @foreach($seccion as $item)
        <option value="{{$item->Id}}">{{$item->seccion}}</option>
        @endforeach

    </select>


    <input type="submit" class="btn btn-sucess my-4" value="Enviar">

</form>
@endsection