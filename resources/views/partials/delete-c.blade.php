<div class="modal fade" id="delete-{{ $ciudadanos->id }}c" tabindex="-1" role="dialog" aria-labelledby="delete-{{ $ciudadanos->id }}c" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="delete-{{ $ciudadanos->id }}c">Eliminar ciudadano</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <P>Está seguro de eliminar?</P>
        <form action="{{ route('ciudadano-delete',[$ciudadanos->id]) }}" method="post">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Eliminar</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>