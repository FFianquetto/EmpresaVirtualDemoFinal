<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="registro_id" class="form-label">{{ __('Registro Id') }}</label>
            <input type="text" name="registro_id" class="form-control @error('registro_id') is-invalid @enderror" value="{{ old('registro_id', $publicacione?->registro_id) }}" id="registro_id" placeholder="Registro Id">
            {!! $errors->first('registro_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="titulo" class="form-label">{{ __('Titulo') }}</label>
            <input type="text" name="titulo" class="form-control @error('titulo') is-invalid @enderror" value="{{ old('titulo', $publicacione?->titulo) }}" id="titulo" placeholder="Titulo">
            {!! $errors->first('titulo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="contenido" class="form-label">{{ __('Contenido') }}</label>
            <input type="text" name="contenido" class="form-control @error('contenido') is-invalid @enderror" value="{{ old('contenido', $publicacione?->contenido) }}" id="contenido" placeholder="Contenido">
            {!! $errors->first('contenido', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="conversacion_id" class="form-label">{{ __('Conversacion Id') }}</label>
            <input type="text" name="conversacion_id" class="form-control @error('conversacion_id') is-invalid @enderror" value="{{ old('conversacion_id', $publicacione?->conversacion_id) }}" id="conversacion_id" placeholder="Conversacion Id">
            {!! $errors->first('conversacion_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>