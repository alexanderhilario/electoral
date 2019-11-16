<div class="modal fade" id="agregar-{{ $ciudadanos->id }}c" tabindex="-1" role="dialog" aria-labelledby="agregar-{{ $ciudadanos->id }}c" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="agregar-{{ $ciudadanos->id }}c">Actulizar ciudadano</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('ciudadano-edit',[$ciudadanos->id ]) }}" method="post">
          @csrf
          @method('PUT')
          <div class="form-group">
            <label for="cedula">Cédula</label>
            <p>{{ $ciudadanos->cedula }}</p>
          </div>
          <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" value="{{ $ciudadanos->nombre }}" class="form-control" placeholder="Nombre">
            @if ($errors->has('nombre'))
                  <small style="color: #red;"><strong>{{ $errors->first('nombre') }}</strong></small>
              @endif
          </div>
          <div class="form-group">
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" value="{{ $ciudadanos->apellido }}" class="form-control" placeholder="Apellido">
            @if ($errors->has('apellido'))
                  <small style="color: #red;"><strong>{{ $errors->first('apellido') }}</strong></small>
              @endif
          </div>
           <div class="form-group">
            <label for="email">Email</label>
            <p>{{ $ciudadanos->email }}</p>
          </div>
            <div class="form-group">
            <label for="descripcion">Estado</label>
            <select class="form-control" name="estado">
              <option value="1" @if($ciudadanos->estado == 1) selected @endif>Activo</option>
              <option value="2" @if($ciudadanos->estado == 2) selected @endif>Inactivo</option>
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