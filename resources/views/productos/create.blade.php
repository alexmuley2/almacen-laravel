@extends('layouts.app')

@section('content')
    <h2>Crear Producto</h2>

    <form action="{{ route('productos.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="cantidad">Cantidad:</label>
            <input type="number" name="cantidad" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="precio">Precio:</label>
            <input type="number" name="precio" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>
@endsection
