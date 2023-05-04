@extends('test.layouts.layout')

@section('titulo', 'Listar Crud Test')

@section('contenido')

    <div class="container mx-auto">
        <h1>Listar Crud Test</h1>
        <hr>

        <table class="table-auto">
            <thead>
                <tr>
                    <th class="px-4 py-2">Nombre</th>
                    <th class="px-4 py-2">Imagen</th>
                    <th class="px-4 py-2">Eliminar</th>
                    <th class="px-4 py-2">Editar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categorias as $categoria)
                    <tr>
                        <td class="border px-4 py-2">{{ $categoria->nombre }}</td>
                        <td class="border px-4 py-2">{{ $categoria->imageUrl }}</td>
                        <td class="border px-4 py-2">
                            <form action="{{ route('crud.delete', $categoria->idTipoProducto) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button
                                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">delete</button>
                            </form>
                        </td>
                        <td class="border px-4 py-2"><a
                                class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded"
                                href="{{ route('crud.edit', $categoria->idTipoProducto) }}">edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>


        <br>
        <a href="{{ route('crud.create') }}"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Crear</a>
    </div>


@stop
