<div class="modal fade" id="delete-candidato{{ $candidatos->id }}" tabindex="-1" role="dialog" aria-labelledby="delete-candidato{{ $candidatos->id }}" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="delete-candidato{{ $candidatos->id }}">Eliminar candidato</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <P>Está seguro de eliminar?</P>
        <form action="{{ route('candidatos-delete',[$candidatos->id]) }}" method="post">
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