<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('solicitante') }}
            {{ Form::text('solicitante', $solicitud->solicitante, ['class' => 'form-control' . ($errors->has('solicitante') ? ' is-invalid' : ''), 'placeholder' => 'Solicitante']) }}
            {!! $errors->first('solicitante', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre_apellidos') }}
            {{ Form::text('nombre_apellidos', $solicitud->nombre_apellidos, ['class' => 'form-control' . ($errors->has('nombre_apellidos') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Apellidos']) }}
            {!! $errors->first('nombre_apellidos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('DNI') }}
            {{ Form::text('DNI', $solicitud->DNI, ['class' => 'form-control' . ($errors->has('DNI') ? ' is-invalid' : ''), 'placeholder' => 'Dni']) }}
            {!! $errors->first('DNI', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo_sangre') }}
            {{ Form::text('tipo_sangre', $solicitud->tipo_sangre, ['class' => 'form-control' . ($errors->has('tipo_sangre') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Sangre']) }}
            {!! $errors->first('tipo_sangre', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>