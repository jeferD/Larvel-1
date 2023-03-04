@extends('layouts.plantilla')

@section('title', 'Home')

@section('content')
    <h1>Bienvenido desde a cursos</h1>
    <a href="{{route('cursos.create')}}">Crear cursos</a>
    {{-- <a href="cursos/create">Crear cursos</a> --}}
    <ul>
        @foreach ($cursos as $curso)
           <li><a href="{{route('cursos.show', $curso->id)}}">{{$curso->id}} - {{$curso->name}}</a></li> 
        @endforeach
    </ul>
    {{-- {!! $cursos->render() !!} --}}
    {{$cursos->links()}}
@endsection