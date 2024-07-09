@extends('adminlte::page')

@section('title', 'agritech')

@section('content_header')
<h1>ESTADISTICAS</h1>
@stop

@section('content')

<div class="container mt-4">
    <div class="card mb-4">
        <div class="card-body">
            @livewire("estadisticas.index")
        </div>
    </div>

</div>

 


@stop