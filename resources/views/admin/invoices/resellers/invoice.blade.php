<div class="modal fade bd-example-modal-lg" tabindex="-1" id="modal-approve-invoice" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Aprovar Fatura</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p><strong>Ao aprovar a fatura, o usuário receberá os itens correspendentes a ela automaticamente. Não é necessário fazer mais nada.</strong></p>
        <form method="POST" id="form-approve-invoice">
          @csrf
          <div class="form-group">
            <input type="hidden" class="form-control" id="invoice_id" name="invoice_id">
          </div>
          <button type="submit" id="btn-approve-invoice" class="btn btn-primary">Aprovar</button>
          <button type="submit" data-dismiss="modal" aria-label="Fechar" class="btn btn-danger">Fechar</button>
        </form>
      </div>
    </div>
  </div>
</div>
