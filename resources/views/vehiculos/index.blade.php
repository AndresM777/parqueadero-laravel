@extends('layouts.app')

@section('titulo', 'Vehículos')

@section('contenido')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Vehículos en Parqueadero</h1>
        <a href="{{ route('vehiculos.create') }}" class="btn btn-primary">Registrar Ingreso</a>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="table-dark">
            <tr>
                <th>Placa</th>
                <th>Tipo</th>
                <th>Propietario</th>
                <th>Ingreso</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($vehiculos as $vehiculo)
                <tr>
                    <td>{{ $vehiculo->placa }}</td>
                    <td>{{ $vehiculo->tipo }}</td>
                    <td>{{ $vehiculo->propietario ?? 'No registrado' }}</td>
                    <td>{{ $vehiculo->created_at->format('d/m/Y H:i') }}</td>
                    <td>
                        <a href="{{ route('vehiculos.edit', $vehiculo) }}" class="btn btn-sm btn-warning">Editar</a>

                        <form action="{{ route('vehiculos.destroy', $vehiculo) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('¿Confirmar salida del vehículo?')">Salida</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
