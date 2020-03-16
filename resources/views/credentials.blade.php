{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Credenciales')

@section('content_header')
    @if(!\Illuminate\Support\Facades\Auth::check())
        @include('layouts.menu')
    @endif
    <h1>API Gallery</h1>
@stop

@section('content')
    <div class="card border-0 shadow-sm">
        <div class="card-body border-0">
            Para hacer uso de la api necesitas incluir tu llave privada en las consultas

            <div class="alert bg-gray-light">
                <code>{{ \Illuminate\Support\Facades\Auth::User()->api_token }}</code>
            </div>
        </div>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-body border-0">
            Ejemplo de uso de la llave privada

            <div class="alert bg-gray-light">
                <code>
                    {{ route('api.images') }}<b>?api_token={{ \Illuminate\Support\Facades\Auth::User()->api_token }}</b>

                </code>
            </div>
        </div>
    </div>

@stop

@section('css')
    <link rel="icon" href="{{ asset('img/gal.png') }}">
@stop

@section('js')
    <!--    Created by danidoble    -->
@stop
