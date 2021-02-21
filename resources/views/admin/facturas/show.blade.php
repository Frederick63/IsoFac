@extends('adminlte::page')

@section('title', 'Descarga Facturas')

@section('content_header')
    {{-- <h1>show PANTALLA DocNo:{{$factura}}</h1> --}}
@stop

@section('content')

<h1>{{$DocNo}}</h1>
<h2>Mensaje enviado</h2>
    
<div class="embed-container">
    <iframe src="{{asset('PDF/Facturas_242.pdf')}}" frameborder="0" allowfullscreen></iframe>
</div>
    

    <?php
        // $name = "ClassThereforeWeb, Version=1.0.0.0, Culture=neutral, PublicKeyToken=6177555a3045d1b3";
        // $class1 = new DOTNET($name, "ClassThereforeWeb.ExtraerPdfFactura");
        // echo $class1->Buscar_Factura_Therefore(234567, "wrwer", "wdsdfds" ); 
    ?> 

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <style>
        .embed-container {
            position: relative;
            padding-bottom: 56.25%;
            height: 0;
            overflow: hidden;
        }
        .embed-container iframe {
            position: absolute;
            top:0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop