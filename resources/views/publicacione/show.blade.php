@extends('layouts.app')

@section('template_title')
    {{ $publicacione->name ?? __('Show') . " " . __('Publicacione') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Publicacione</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('publicaciones.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Registro Id:</strong>
                                    {{ $publicacione->registro_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Titulo:</strong>
                                    {{ $publicacione->titulo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Contenido:</strong>
                                    {{ $publicacione->contenido }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Conversacion Id:</strong>
                                    {{ $publicacione->conversacion_id }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
