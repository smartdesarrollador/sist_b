@extends('test.layouts.layout')

@section('titulo', 'Crud Test')

@section('contenido')

    <div class="container mx-auto">
        <h2>Crear</h2>
        <br>



        <form action="{{ route('crud.store') }}" method="POST">
            @csrf
            <div class="flex flex-col">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" value="">
            </div>
            <div class="flex flex-col">
                <label for="texto">nombre img</label>
                <input type="text" name="imageUrl" value="">
            </div>
            <br>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                type="submit">Enviar</button>

        </form>
        <br>
        <br>

        <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
            href="{{ route('crud.index') }}">Regresar</a>

    </div>














@stop
