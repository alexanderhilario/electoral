<div class="modal fade" id="resultado{{ $eleccione->id }}" tabindex="-1" role="dialog" aria-labelledby="resultado{{ $eleccione->id }}" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="resultado{{ $eleccione->id }}">
          Resultados
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
           <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Votos</th>
              </tr>
            </thead>
            <tbody>
              @foreach($eleccione->candidato as $candidatos)
                <tr>
                  <th scope="row">{{ $candidatos->id }}</th>
                  <td>{{ $candidatos->nombre }} {{ $candidatos->apellido }}</td>
                  <td>{{ $candidatos->votos }} </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
    </div>
  </div>
</div>