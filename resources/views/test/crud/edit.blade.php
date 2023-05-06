@extends('test.layouts.layout')

@section('titulo', 'Edit Crud Test')

@section('contenido')

    

<div class="container mx-auto">
    <h1 class="mt-8 text-lg">Editar</h1>
    <br>
    <div class="w-full max-w-md">
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="{{ route('crud.update', $categoria->idTipoProducto) }}" method="POST">
            @csrf
            @method('put')
            <div class="mb-4">
            <label class="inline text-gray-700 text-sm font-bold mb-2" for="nombre">
              nombre
            </label>
            <input class="inline shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="nombre" value="{{ $categoria->nombre }}" id="nombre" type="text" placeholder="nombre">
          </div>
          <div class="mb-6">
            <label class="inline text-gray-700 text-sm font-bold mb-2" for="imageUrl">
              Image
            </label>
            <input class="inline shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="imageUrl" value="{{ $categoria->imageUrl }}" id="imageUrl" type="text" >
            
          </div>
          <div class="flex items-center justify-between">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
              Guardar
            </button>
           
          </div>
        </form>
       
      </div>

      <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
            href="{{ route('crud.index') }}">Regresar</a>
</div>



    

@stop
