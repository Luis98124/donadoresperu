@extends('layouts.app')

@section('template_title')
    {{ $solicitud->name ?? "{{ __('Show') Solicitud" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Solicitud</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('solicituds.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Solicitante:</strong>
                            {{ $solicitud->solicitante }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Apellidos:</strong>
                            {{ $solicitud->nombre_apellidos }}
                        </div>
                        <div class="form-group">
                            <strong>Dni:</strong>
                            {{ $solicitud->DNI }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Sangre:</strong>
                            {{ $solicitud->tipo_sangre }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
