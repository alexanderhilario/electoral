<div class="modal fade" id="agregarpartido" tabindex="-1" role="dialog" aria-labelledby="agregarpartido" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="agregarpartido">Agregar partido</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('partido-add') }}" method="post">
          @csrf
          <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control" placeholder="Nombre">
            @if ($errors->has('nombre'))
                  <small style="color: #red;"><strong>{{ $errors->first('nombre') }}</strong></small>
              @endif
          </div>
          <div class="form-group">
            <label for="descripcion">Descripción</label>
            <input type="text" name="descripcion" class="form-control" placeholder="Apellido">
            @if ($errors->has('apellido'))
                  <small style="color: #red;"><strong>{{ $errors->first('apellido') }}</strong></small>
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