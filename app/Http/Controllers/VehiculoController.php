<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use Illuminate\Http\Request;

class VehiculoController extends Controller
{
    // 1. Mostrar la lista de vehículos
    public function index()
    {
        $vehiculos = Vehiculo::getVehiculos();
        return view('vehiculos.index', compact('vehiculos'));
    }

    // 2. Mostrar el formulario para crear uno nuevo
    public function create()
    {
        return view('vehiculos.create');
    }

    // 3. Guardar el nuevo vehículo en la BD
    public function store(Request $request)
    {
        // Validamos que los datos obligatorios vengan bien
        $request->validate([
            'placa' => 'required|max:10',
            'tipo'  => 'required',
        ]);

        Vehiculo::createVehiculo($request->all());

        return redirect()->route('vehiculos.index')
            ->with('success', 'Vehículo registrado exitosamente.');
    }

    // 4. Mostrar formulario de edición (cargando los datos actuales)
    public function edit(Vehiculo $vehiculo)
    {
        return view('vehiculos.edit', compact('vehiculo'));
    }

    // 5. Actualizar los cambios en la BD
    public function update(Request $request, Vehiculo $vehiculo)
    {
        $request->validate([
            'placa' => 'required|max:10',
            'tipo'  => 'required',
        ]);

        $vehiculo->updateVehiculo($request->all());

        return redirect()->route('vehiculos.index')
            ->with('success', 'Vehículo actualizado.');
    }

    // 6. Eliminar el vehículo (Salida del parqueadero)
    public function destroy(Vehiculo $vehiculo)
    {
        Vehiculo::deleteVehiculo($vehiculo);

        return redirect()->route('vehiculos.index')
            ->with('success', 'Vehículo eliminado.');
    }
}
