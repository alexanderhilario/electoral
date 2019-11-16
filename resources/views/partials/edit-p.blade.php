<div class="modal fade" id="edit-puesto{{ $puestos->id }}" tabindex="-1" role="dialog" aria-labelledby="edit-puesto{{ $puestos->id }}" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="edit-puesto{{ $puestos->id }}">Actulizar puesto electivo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('edit-puesto',[$puestos->id]) }}" method="post">
          @csrf
          @method('PUT')
          <div class="form-group">
            <label for="puesto">Puesto</label>
            <input type="text" name="nombre" value="{{ $puestos->nombre }}" class="form-control" id="puesto"  placeholder="Puesto electivo">
            {{--<small id="puesto" class="form-text text-muted">We'll never share your email with anyone else.</small>--}}
          </div>
          <div class="form-group">
            <label for="descripcion">Descripción</label>
            <input type="text" name="descripcion" value="{{ $puestos->descripcion }}" class="form-control" id="descripcion"  placeholder="Descripción">
            {{--<small id="puesto" class="form-text text-muted">We'll never share your email with anyone else.</small>--}}
          </div>
            <div class="form-group">
            <label for="descripcion">Estado</label>
            <select>
              <option value="1" @if($puestos->estado == 1) selected @endif>Activo</option>
              <option value="2" @if($puestos->estado == 2) selected @endif>Inactivo</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Actualizar</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>