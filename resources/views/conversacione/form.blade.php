<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="registro_id_emisor" class="form-label">{{ __('Registro Id Emisor') }}</label>
            <input type="text" name="registro_id_emisor" class="form-control @error('registro_id_emisor') is-invalid @enderror" value="{{ old('registro_id_emisor', $conversacione?->registro_id_emisor) }}" id="registro_id_emisor" placeholder="Registro Id Emisor">
            {!! $errors->first('registro_id_emisor', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="registro_id_receptor" class="form-label">{{ __('Registro Id Receptor') }}</label>
            <input type="text" name="registro_id_receptor" class="form-control @error('registro_id_receptor') is-invalid @enderror" value="{{ old('registro_id_receptor', $conversacione?->registro_id_receptor) }}" id="registro_id_receptor" placeholder="Registro Id Receptor">
            {!! $errors->first('registro_id_receptor', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="mensaje" class="form-label">{{ __('Mensaje') }}</label>
            <input type="text" name="mensaje" class="form-control @error('mensaje') is-invalid @enderror" value="{{ old('mensaje', $conversacione?->mensaje) }}" id="mensaje" placeholder="Mensaje">
            {!! $errors->first('mensaje', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="enviado_en" class="form-label">{{ __('Enviado En') }}</label>
            <input type="text" name="enviado_en" class="form-control @error('enviado_en') is-invalid @enderror" value="{{ old('enviado_en', $conversacione?->enviado_en) }}" id="enviado_en" placeholder="Enviado En">
            {!! $errors->first('enviado_en', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>