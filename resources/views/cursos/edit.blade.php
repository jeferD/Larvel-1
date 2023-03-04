@extends('layouts.plantilla')

@section('title', $curso->name)

@section('content')

    <h1>Bienvenido a edit</h1>
    <form action="{{route('cursos.update', $curso)}}" method="POST">
        @csrf
        @method('put')
        <br>
        <label for="">Nombre: <br><input type="text" name="name" value="{{old('name',$curso->name)}}" class="border-2 border-black"></label>
        @error('name')
            <br>
            <small>*{{$message}}</small>
        @enderror
        <br>
        <label for="">Descripcion: <br><textarea name="descripcion" rows="3" class="border-2 border-black">{{old('descripcion',$curso->descripcion)}}</textarea></label>
        @error('descripcion')
            <br>
            <small>*{{$message}}</small>
        @enderror
        <br>
        <label for="">Categoria: <br><input name="categoria" value="{{old('categoria',$curso->categoria)}}" class="border-2 border-black"></label>
        @error('categoria')
            <br>
            <small>*{{$message}}</small>
        @enderror
        <br>
        <button type="submit">Actualizar formulario</button>
    </form>
    
@endsection