<div class="modal fade" id="candidatos-add" tabindex="-1" role="dialog" aria-labelledby="candidatos-add" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="candidatos-add">Agregar candidatos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('candidato-add') }}" method="post">
          @csrf
          <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control" placeholder="Nombre">
            @if ($errors->has('nombre'))
                  <small style="color: #red;"><strong>{{ $errors->first('nombre') }}</strong></small>
              @endif
          </div>
          <div class="form-group">
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" class="form-control" placeholder="Apellido">
            @if ($errors->has('apellido'))
                  <small style="color: #red;"><strong>{{ $errors->first('apellido') }}</strong></small>
              @endif
          </div>
           <div class="form-group">
            <label for="">Partidos</label>
            <select class="form-control" name="partido">
              @foreach($partido as $partidos)
                <option value="{{ $partidos->id }}">{{ $partidos->nombre }}</option>
              @endforeach
            </select>
            @if ($errors->has('partido'))
                   <small style="color: #red;"><strong>{{ $errors->first('partido') }}</strong></small>
              @endif
          </div>
            <div class="form-group">
            <label for="">Puesto</label>
            <select class="form-control" name="puesto">
              @foreach($puesto as $puestos)
                <option value="{{ $puestos->id }}">{{ $puestos->nombre }}</option>
              @endforeach
            </select>
            @if ($errors->has('puesto'))
                   <small style="color: #red;"><strong>{{ $errors->first('puesto') }}</strong></small>
              @endif
          </div>
              <div class="form-group">
            <label for="">Elecciones</label>
            <select class="form-control" name="eleccion">
              @foreach($eleccion as $elecciones)
                <option value="{{ $elecciones->id }}">{{ $elecciones->nombre }}</option>
              @endforeach
            </select>
            @if ($errors->has('eleccion'))
                   <small style="color: #red;"><strong>{{ $errors->first('eleccion') }}</strong></small>
              @endif
          </div>
          <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Guardar</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>