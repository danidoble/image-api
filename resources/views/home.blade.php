{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')
    @if(!\Illuminate\Support\Facades\Auth::check())
        @include('layouts.menu')
    @endif
    <h1>API Gallery</h1>
@stop

@section('content')
    <div class="card border-0 shadow-sm">
        <div class="card-header border-0">Consultar todas las imagenes</div>

        <div class="card-body border-0">
            Si desean obtener todas las imagenes deben enviar
            <br>
            <div class="alert bg-gray-light">
                <code>
                    {{ route('api.images') }}?api_token={clave_privada}
                </code>
            </div>
            <br>
        </div>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-header border-0">Consultar una imagen especifica por id</div>

        <div class="card-body border-0">
            Para consultar de esta manera, se debe incluir un atributo extra a la consulta
            <code>
                image={id}
            </code>
            <br>
            <div class="alert bg-gray-light">
                <code>
                    {{ route('api.images') }}?api_token={clave_privada}&image={id}
                </code>
            </div>
            <br>
        </div>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-header border-0">Consultar una imagen por categoria</div>

        <div class="card-body border-0">
            Esto traera todas las imagenes que coincidan con la busqueda, para hacer este tipo de busqueda deben agregar el atributo
            <code>
                query={query}
            </code>
            <br>
            <div class="alert bg-gray-light">
                <code>
                    {{ route('api.images') }}?api_token={clave_privada}&query={query}
                </code>
            </div>
            <br>
        </div>
    </div>


@stop

@section('css')
    <link rel="icon" href="{{ asset('img/gal.png') }}">
@stop

@section('js')
    <!--    Created by danidoble    -->
@stop
