@extends('adminlte::page')

@section('title', 'agritech')

@section('content_header')
<h1>Entradas</h1>
@stop

@section('content')
@livewire("entradas.index")


@stop