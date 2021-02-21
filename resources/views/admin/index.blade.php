@extends('adminlte::page')

@section('title', 'Descarga Facturas')

@section('content_header')
    <h1>Facturas PANTALLA ESPLICATIVA DE COMO FUNCIONA</h1>
@stop


@section('content')


@if (Auth::user()->can('admin.facturas.index', 'admin.facturas.show'))
    <h1>ERES CLIENTE</h1>
@endif

@unless (Auth::user()->can('admin.facturas.index', 'admin.facturas.show'))
    <h1>NO ERES CLIENTE AUN</h1>
@endunless


@stop


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop