@extends('adminlte::page')

@section('title', 'Descarga Facturas')

@section('content_header')
    <h1>Facturas PANTALLA</h1>
@stop

@section('content')
    
    @livewire('admin.facturas-index')

@stop
