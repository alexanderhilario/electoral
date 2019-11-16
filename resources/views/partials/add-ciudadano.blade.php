<div class="modal fade" id="agregarc" tabindex="-1" role="dialog" aria-labelledby="agregarc" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="agregarc">Agregar ciudadano</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('ciudadano-add') }}" method="post">
          @csrf
          <div class="form-group">
            <label for="cedula">Cédula</label>
            <input type="text" name="cedula" class="form-control" placeholder="Cédula">
             @if ($errors->has('cedula'))
                  <small style="color: #red;"><strong>{{ $errors->first('cedula') }}</strong></small>
              @endif
          </div>
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
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" placeholder="Email">
            @if ($errors->has('email'))
                   <small style="color: #red;"><strong>{{ $errors->first('email') }}</strong></small>
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