@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <a href="{{ route('home') }}" class="btn btn-secondary">Volver atrás</a>
        </div>
        
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>ID del Camión</th>
                        <th>Chapa del Camión</th>
                        <th>Nombre del Material</th>
                        <th>Cantidad Kilos</th>
                        <th>Activo</th>
                        <th>Carga Peligrosa</th>
                        <!-- Agrega aquí las demás columnas de tu modelo Carga -->
                    </tr>
                </thead>
                <tbody id="tablaRegistros">
                    @foreach ($cargas as $carga)
                        <tr>
                            <td>{{ $carga->id }}</td>
                            <td>{{ $carga->camion_id }}</td>
                            <td>{{ $carga->camion->chapa }}</td>
                            <td>{{ $carga->material->nombre }}</td>
                            <td>{{$carga->cantidad_kilos}}</td>
                            <td>
                                <span class="badge {{ $carga->activo ? 'bg-success text-light' : 'bg-danger text-light' }}">
                                    {{ $carga->activo ? 'Activo' : 'Inactivo' }}
                                </span>
                            </td>
                            <td>
                                <span class="badge {{ $carga->material->carga_peligrosa ? 'bg-danger text-light' : 'bg-success text-light' }}">
                                    {{ $carga->material->carga_peligrosa ? 'Peligrosa' : 'No Peligrosa' }}
                                </span>
                            </td>
                            <!-- Agrega aquí las demás columnas de tu modelo Carga -->
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
