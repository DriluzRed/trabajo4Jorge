@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <a href="{{ route('home') }}" class="btn btn-secondary">Volver atrás</a>
        </div>
        
        <div class="card-body">
            <div class="mb-3">
                <label for="nombre" class="form-label">Buscar por Nombre:</label>
                <input type="text" class="form-control" id="nombre">
            </div>

            <div class="mb-3">
                <label for="cargaPeligrosa" class="form-label">Carga Peligrosa:</label>
                <select class="form-control" id="cargaPeligrosa">
                    <option value="">Todos</option>
                    <option value="1">Sí</option>
                    <option value="0">No</option>
                </select>
            </div>

            <table class="table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Carga Peligrosa</th>
                    </tr>
                </thead>
                <tbody id="tablaRegistros">
                    @foreach ($materiales as $material)
                        <tr>
                            <td>{{ $material->nombre }}</td>
                            <td>
                                <span class="badge {{ $material->carga_peligrosa ? 'bg-danger text-light' : 'bg-success text-light' }}">
                                    {{ $material->carga_peligrosa ? 'Peligrosa' : 'No Peligrosa' }}
                                </span>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="{{asset('js/jquery-3.7.1.min.js')}}"></script>
<script>
    function buscarRegistros() {
        var nombre = $('#nombre').val().toLowerCase();
        var cargaPeligrosa = $('#cargaPeligrosa').val();
        $.get('/buscarMaterial', { nombre: nombre, cargaPeligrosa: cargaPeligrosa }, function (registrosFiltrados) {
            var tablaRegistros = $('#tablaRegistros');
            tablaRegistros.empty();

            $.each(registrosFiltrados, function (index, material) {
                var nuevaFila = '<tr>' +
                    '<td>' + material.nombre + '</td>' +
                    '<td>' +
                        '<span class="badge ' + (material.carga_peligrosa ? 'bg-danger text-light' : 'bg-success text-light') + '">' +
                            (material.carga_peligrosa ? 'Peligrosa' : 'No Peligrosa') +
                        '</span>' +
                    '</td>' +
                    '</tr>';
                tablaRegistros.append(nuevaFila);
            });
        });
    }
    $('#nombre, #cargaPeligrosa').on('input', buscarRegistros);
</script>

@endsection