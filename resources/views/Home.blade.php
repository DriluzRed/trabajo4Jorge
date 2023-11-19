@extends('layouts.app')
<div class="container">
    <h1>Jorge Baez</h1>
    <div class="card">
        <div class="card-header">
            <h2>Transporte de productos</h2>
        </div>
        <div class="card-body">
            <img src="{{asset('img/DER.jpeg')}}" alt="aca va la imagen del DER" class="img-fluid" style="max-width: 100%; height: auto;">
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h2>Modulos</h2>
        </div>
        <div class="card-body">
           <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3>Camiones</h3>
                    </div>
                    <div class="card-body">
                        <a href="{{route('camion.index')}}" class="btn btn-primary">Ir al modulo</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3>Materiales</h3>
                    </div>
                    <div class="card-body">
                        <a href="{{route('material.index')}}" class="btn btn-primary">Ir al modulo</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3>Cargas</h3>
                    </div>
                    <div class="card-body">
                        <a href="{{route('carga.index')}}" class="btn btn-primary">Ir al modulo</a>
                    </div>
                </div>
            </div>
           </div>
        </div>
</div>