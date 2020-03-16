@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">API Gallery</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Bienvenido/a
                        <br>
                    Tu api key es <code>{{ \Illuminate\Support\Facades\Auth::User()->api_token }}</code>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
