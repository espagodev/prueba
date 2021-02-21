    @csrf
    <div class="form-group">
            <label>fecha </label>
        <input id="fecha" type="text" class="form-control{{ $errors->has('fecha') ? ' is-invalid' : '' }}" name="fecha" value="{{ old('fecha') }}" required>

        @if ($errors->has('fecha'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('fecha') }}</strong>
            </span>
        @endif
    </div>
    <div class="form-group">
            <label>Asunto </label>
        <input id="asunto" type="text" class="form-control{{ $errors->has('asunto') ? ' is-invalid' : '' }}" name="asunto" value="{{ old('asunto') }}" required>
          @if ($errors->has('asunto'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('asunto') }}</strong>
            </span>
        @endif
    </div>
    <div class="form-floating">
        <textarea class="form-control" placeholder="Texto" name="texto" id="texto" style="height: 100px"></textarea>

    </div>
