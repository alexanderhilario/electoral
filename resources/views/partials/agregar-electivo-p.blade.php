<div class="modal fade" id="agregar" tabindex="-1" role="dialog" aria-labelledby="agregar" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="agregar">Agregar puesto electivo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('add-puesto') }}" method="post">
          @csrf
          <div class="form-group">
            <label for="puesto">Puesto</label>
            <input type="text" name="puesto" class="form-control" id="puesto"  placeholder="Puesto electivo">
            {{--<small id="puesto" class="form-text text-muted">We'll never share your email with anyone else.</small>--}}
          </div>
          <div class="form-group">
            <label for="descripcion">Descripción</label>
            <input type="text" name="descripcion" class="form-control" id="descripcion"  placeholder="Descripción">
            {{--<small id="puesto" class="form-text text-muted">We'll never share your email with anyone else.</small>--}}
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