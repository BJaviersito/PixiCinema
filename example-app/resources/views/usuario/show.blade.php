@extends('layouts.app')

@section('template_title')
    {{ $usuario->name ?? "{{ __('Show') Usuario" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Usuario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('usuarios.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $usuario->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $usuario->Correo }}
                        </div>
                        <div class="form-group">
                            <strong>Contrasena:</strong>
                            {{ $usuario->Contrasena }}
                        </div>
                        <div class="form-group">
                            <strong>Fecharegistros:</strong>
                            {{ $usuario->FechaRegistros }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
