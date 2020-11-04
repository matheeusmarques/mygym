<div class="modal fade" id="modal-new-package" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Novo Pacote</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
        </button>
      </div>
      <div class="modal-body">
        <form id="form-new-package" method="POST">
          @csrf
          <div class="form-group mb-4">
            <input type="text" class="form-control" id="name" name="name" placeholder="Nome do Pacote">
          </div>
          <div class="form-group mb-4">
            <input type="text" class="form-control" name="description" id="description" placeholder="Descrição do Pacote">
          </div>
          <div class="form-group mb-4">
            <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Quantidade de Créditos">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="price" name="price" placeholder="Valor">
          </div>
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-primary"></input>
        <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Fechar</button>
      </form>
      </div>
    </div>
  </div>
</div>
