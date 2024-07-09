@extends('adminlte::page')

@section('title', 'agritech')

@section('content_header')
<h1>Entradas</h1>
@stop

@section('content')

<div class="container mt-4">
    <div class="card mb-4">
        <div class="card-body">
            @livewire("salidas.index")
        </div>
    </div>



    <div class="card mb-4">
        <div class="card-body">
            @livewire("tipo-operacion.index")
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-body">
            @livewire("entradas.index")
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-body">
            @livewire("agentes.index")
        </div>
    </div>
</div>


@stop