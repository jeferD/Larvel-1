@extends('layouts.plantilla')

@section('title', 'Home')

@section('content')
    <h1>Bienvenido desde create</h1>
    <form action="{{route('cursos.store')}}" method="POST">
        @csrf
        <br>
        <label for="">Nombre: <br><input type="text" name="name" value="{{old('name')}}" class="border-2 border-black"></label>
        @error('name')
            <br>
            <small>*{{$message}}</small>
        @enderror
        <br>
        <label for="">Descripcion: <br><textarea name="descripcion" rows="3" class="border-2 border-black">{{old('descripcion')}}</textarea></label>
        @error('descripcion')
            <br>
            <small>*{{$message}}</small>
        @enderror
        <br>
        <label for="">Categoria: <br><input name="categoria" value="{{old('categoria')}}" class="border-2 border-black"></label>
        @error('categoria')
            <br>
            <small>*{{$message}}</small>
        @enderror<br>
        <button type="submit">Enviar formulario</button>
    </form>
@endsection