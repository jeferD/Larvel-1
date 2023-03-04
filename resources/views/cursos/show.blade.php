@extends('layouts.plantilla')

@section('title', $curso->name)

@section('content')

    <h1>Bienvenido al curso: {{$curso->name}}</h1>
    <p><strong>Categoria:</strong> {{$curso->categoria}}</p>
    <p>{{$curso->descripcion}}</p>
    <br>
    <a href="{{route('cursos.index')}}">Volver a cursos</a>
    <a href="{{route('cursos.edit', $curso)}}">Editar este curso</a>
    <form action="{{route('cursos.destroy',$curso)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
    </form>
@endsection