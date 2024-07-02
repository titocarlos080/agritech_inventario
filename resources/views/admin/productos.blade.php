@extends('adminlte::page')

@section('title', 'agritech')

@section('content_header')
<h1>PRODUCTOS</h1>
@stop

@section('content')
@livewire("productos.index")


@stop