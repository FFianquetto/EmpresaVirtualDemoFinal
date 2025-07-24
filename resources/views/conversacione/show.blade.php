@extends('layouts.app')

@section('template_title')
    {{ $conversacione->name ?? __('Show') . " " . __('Conversacione') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Conversacione</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('conversaciones.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Registro Id Emisor:</strong>
                                    {{ $conversacione->registro_id_emisor }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Registro Id Receptor:</strong>
                                    {{ $conversacione->registro_id_receptor }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Mensaje:</strong>
                                    {{ $conversacione->mensaje }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Enviado En:</strong>
                                    {{ $conversacione->enviado_en }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
