@extends('test.layouts.layout')

@section('titulo', 'Listar Crud Test')

@section('contenido')

    <div class="container mx-auto">
        <h1>Listar Crud Test</h1>

        @foreach ($categorias as $categoria)
            <h1>nombre: {{ $categoria->nombre }}
                - imagen: {{ $categoria->imageUrl }}
                -
                <form action="{{ route('crud.delete', $categoria->idTipoProducto) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button>delete</button>
                </form>
                - <a href="{{ route('crud.edit', $categoria->idTipoProducto) }}">edit</a>


            </h1>
        @endforeach
    </div>


@stop
