<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    // Nombre de la tabla
    protected $table = 'vehiculos';

    // Campos que permitimos llenar masivamente
    protected $fillable = [
        'placa',
        'tipo',
        'propietario',
        'observaciones'
    ];

    // --- Funciones personalizadas (Wrappers) ---

    public static function getVehiculos()
    {
        return self::all(); // Obtiene todos los autos
    }

    public static function getVehiculosById($id)
    {
        return self::find($id); // Busca por ID
    }

    public static function createVehiculo($data)
    {
        return self::create($data); // Crea uno nuevo
    }

    // Nota: Esta función la usaremos desde la instancia ($vehiculo->updateVehiculo)
    public function updateVehiculo($data)
    {
        return $this->update($data); // Actualiza el actual
    }

    public static function deleteVehiculo(Vehiculo $vehiculo)
    {
        $vehiculo->delete(); // Elimina
    }
}
