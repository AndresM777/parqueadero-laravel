# Tarea - Desarrollo en Plataformas

**Estudiante:** Rodrigo Lucano
**Fecha:** 17/12/2025
**Paralelo:** 2

## Mis Decisiones de Diseño

### 1. Tabla
**Nombre de la tabla:** `vehiculos`

**Campos:**
| Campo | Tipo | ¿Obligatorio? |
|-------|------|---------------|
| id | BigInt (PK) | Sí (Automático) |
| placa | String(10) | Sí |
| tipo | String(20) | Sí |
| propietario | String(100) | No (Opcional) |
| observaciones | Text | No (Opcional) |
| created_at | Timestamp | Sí (Automático - Fecha Ingreso) |
| updated_at | Timestamp | Sí (Automático) |

### 2. Tipos de vehículo
Para mantener la consistencia de datos y facilitar el uso en móviles, se limitaron las opciones a una lista cerrada:
* Automóvil
* Motocicleta
* Camioneta

### 3. ¿Se puede eliminar registros?
**Respuesta:** Sí (Eliminación física / Hard Delete).

**Razón:**
Se optó por eliminar el registro completamente de la base de datos cuando el vehículo sale, para mantener la simplicidad del sistema solicitada por el cliente ("Yo debería poder borrar ese registro") y no llenar la base de datos con históricos en esta primera versión.

http://parqueadero.test/vehiculos
