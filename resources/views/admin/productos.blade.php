@extends('adminlte::page')

@section('title', 'agritech')

@section('content_header')
@stop

@section('content')
<div class="container mt-4">
    <div class="card mb-4">
        <div class="card-body">
        @livewire("productos.index")
        </div>
    </div>
    
</div>
 

@stop