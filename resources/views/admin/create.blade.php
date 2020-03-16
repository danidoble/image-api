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
    @if(session('message'))
        <div class="alert alert-success">
            Registro completo
        </div>
    @endif
    <div class="card border-0 shadow-sm">
        <div class="card-header border-0">Crear</div>

        <div class="card-body border-0">
            <form action="{{ route('admin.create.post') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-12 col-sm-12">
                        <div class="form-group">
                            <label for="url">Url de la imagen</label>
                            <input type="url" id="url" name="url" placeholder="Url de la imagen" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-sm-12">
                        <div class="form-group">
                            <label for="categorias">Categorias</label>
                            <textarea name="categorias" id="categorias" cols="10" placeholder="Categorias" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-danger">Agregar</button>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
@stop

@section('css')
    <link rel="icon" href="{{ asset('img/gal.png') }}">
@stop

@section('js')
    <!--    Created by danidoble    -->
@stop
