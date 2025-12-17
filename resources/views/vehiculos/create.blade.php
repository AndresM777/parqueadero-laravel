@extends('layouts.app')

@section('titulo', 'Nuevo Ingreso')

@section('contenido')
    <h1>Registrar Ingreso de Vehículo</h1>

    <form action="{{ route('vehiculos.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Placa *</label>
            <input type="text" name="placa" class="form-control" required maxlength="10">
        </div>

        <div class="mb-3">
            <label class="form-label">Tipo *</label>
            <select name="tipo" class="form-select" required>
                <option value="">Seleccione...</option>
                <option value="Automóvil">Automóvil</option>
                <option value="Motocicleta">Motocicleta</option>
                <option value="Camioneta">Camioneta</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Propietario (Opcional)</label>
            <input type="text" name="propietario" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Observaciones</label>
            <textarea name="observaciones" class="form-control" rows="3" placeholder="Ej: Rayón puerta izquierda"></textarea>
        </div>

        <a href="{{ route('vehiculos.index') }}" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Registrar Entrada</button>
    </form>
@endsection
