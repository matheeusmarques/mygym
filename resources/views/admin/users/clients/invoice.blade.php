<div class="modal fade bd-example-modal-lg" tabindex="-1" id="modal-generate-invoice" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Gerar Fatura</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" id="form-generate-invoice">
          @csrf
          <div class="form-group">
            <input type="hidden" class="form-control" id="user_id" name="user_id">
            <div class="form-group mb-2">
              <label for="formGroupExampleInput">Selecione o Pacote</label>
              <select id="package_invoice" name="package_id" class="form-control mb-4">
                <option value="">Selecione uma opção</option>
              </select>
            </div>
            <div class="form-group mb-2">
              <label for="formGroupExampleInput">Método de Pagamento</label>
              <select id="payment_method" name="payment_method" class="form-control mb-4">
                <option value="MercadoPago">MercadoPago</option>
                <option value="Externo">Externo(Outro)</option>
              </select>
            </div>
          </div>
          <button type="submit" id="btn-generate-invoice" class="btn btn-primary">Gerar</button>
          <button type="submit" data-dismiss="modal" aria-label="Fechar" class="btn btn-danger">Fechar</button>
        </form>
      </div>
    </div>
  </div>
</div>
