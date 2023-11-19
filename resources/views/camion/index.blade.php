@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <a href="{{route('home')}}" class="btn btn-secondary">Volver atrás</a>
        </div>
        
        <div class="card-body">
            <div class="mb-3">
                <label for="marca" class="form-label">Buscar por Marca:</label>
                <input type="text" class="form-control" id="marca">
            </div>
            
            <div class="mb-3">
                <label for="chapa" class="form-label">Buscar por Chapa:</label>
                <input type="text" class="form-control" id="chapa">
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>Marca</th>
                        <th>Chapa</th>
                        <th>Capacidad</th>
                        <th>Activo</th>
                        <th>Cantidad de cargas</th>
                    </tr>
                </thead>
                <tbody id="tablaRegistros">
                    @foreach ($camiones as $camion)
                        <tr>
                            <td>{{$camion->marca}}</td>
                            <td>{{$camion->chapa}}</td>
                            <td>{{$camion->capacidad_maxima_kilos}}</td>
                            <td>
                                <span class="badge {{ $camion->activo ? 'bg-success text-light' : 'bg-danger text-light' }}">
                                    {{ $camion->activo ? 'Activo' : 'Inactivo' }}
                                </span>
                            </td>
                            <td>{{$camion->carga->count()}}</td>

                        </tr>
                    @endforeach
            </table>
        </div>
    </div>
</div>
<script src="{{asset('js/jquery-3.7.1.min.js')}}"></script>

<script>
   function buscarRegistros() {
        var marca = $('#marca').val().toLowerCase();
        var chapa = $('#chapa').val().toLowerCase();

        // Realizar la petición AJAX con jQuery
        $.get('/buscarCamion', { marca: marca, chapa: chapa }, function (registrosFiltrados) {
            // Actualizar la tabla con los registros filtrados
            var tablaRegistros = $('#tablaRegistros');
            tablaRegistros.empty();

            $.each(registrosFiltrados, function (index, camion) {
            // Agregar filas con los registros filtrados
            var nuevaFila = '<tr>' +
                '<td>' + camion.marca + '</td>' +
                '<td>' + camion.chapa + '</td>' +
                '<td>' + camion.capacidad_maxima_kilos + '</td>' +
                '<td>' +
                    '<span class="badge ' + (camion.activo ? 'bg-success text-light' : 'bg-danger text-light') + '">' +
                        (camion.activo ? 'Activo' : 'Inactivo') +
                    '</span>' +
                '</td>' +
                '<td>' + (camion.carga ? camion.carga.length : 0) + '</td>' +
                '</tr>';
            tablaRegistros.append(nuevaFila);
        });

        });
    }

    $('#marca, #chapa').on('input', buscarRegistros);

</script>
@endsection