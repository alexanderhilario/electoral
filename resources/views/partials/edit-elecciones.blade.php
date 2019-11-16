<div class="modal fade" id="elecciones-edit{{ $eleccione->id }}" tabindex="-1" role="dialog" aria-labelledby="elecciones-edit{{ $eleccione->id }}" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="elecciones-edit{{ $eleccione->id }}">Actulizar elecciones</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('elecciones-edit',[$eleccione->id]) }}" method="post">
          @csrf
          @method('PUT')
          <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" value="{{ $eleccione->nombre }}" class="form-control" placeholder="Nombre">
            @if ($errors->has('nombre'))
                  <small style="color: #red;"><strong>{{ $errors->first('nombre') }}</strong></small>
              @endif
          </div>
          <div class="form-group">
            <label for="descripcion">Estado</label>
            <select class="form-control" name="estado">
              <option value="1" @if($eleccione->estado == 1) selected @endif>Activo</option>
              <option value="2" @if($eleccione->estado == 2) selected @endif>Inactivo</option>
            </select>
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