<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Práctica Laravel - Vehículos</title>
    <style>
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #333; padding: 10px; text-align: left; }
        th { background-color: #f4f4f4; }
        .vacio { color: red; font-weight: bold; text-align: center; }
    </style>
</head>
<body>
    <h1>Listado de Vehículos - Eduardo Rodriguez C.I: 27.712.316</h1>

    <table>
        <thead>
            <tr>
                <th>Placa</th>
                <th>Modelo</th>
                <th>Precio de Venta</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($vehiculos as $vehiculo)
                <tr>
                    <td>{{ $vehiculo->placa }}</td>
                    <td>{{ $vehiculo->modelo }}</td>
                    <td>${{ number_format($vehiculo->precio_venta, 2) }}</td>
                    <td>{{ $vehiculo->usado ? 'Usado' : 'Nuevo' }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="vacio">No se encontraron registros en el sistema.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>