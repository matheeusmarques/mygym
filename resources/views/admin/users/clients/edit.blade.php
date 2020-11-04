<div class="modal fade" id="modal-edit-user" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Editar Usuário</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
        </button>
      </div>
      <div class="modal-body">
        <form id="form-edit-user" method="POST">
          @csrf
          <div class="form-group mb-4">
            <label for="formGroupExampleInput">Email</label>
            <input type="text" disabled class="form-control" id="email" name="email" placeholder="">
            <input type="hidden" class="form-control" id="id" name="id">
          </div>
          <div class="form-group mb-4">
            <label for="formGroupExampleInput">Nome</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="">
          </div>
          <div class="form-group mb-4">
            <label for="formGroupExampleInput">Celular</label>
            <input type="text" class="form-control" id="cellphone" name="cellphone" placeholder="Celular">
          </div>
          <div class="form-group mb-2">
            <label for="formGroupExampleInput">Tipo de Usuário</label>
            <select name="role" id="role" class="form-control mb-4">
              <option value="2">Revendedor</option>
              <option value="0" selected="selected">Cliente</option>
              <option value="1">Administrador</option>
            </select>
          </div>
          <div class="form-group mb-2">
            <label for="formGroupExampleInput">Conta de Testes</label>
            <select name="is_trial" id="is_trial" class="form-control mb-4">
              <option value="1">Sim</option>
              <option value="0">Não</option>
            </select>
          </div>
          <div class="form-group mb-2">
            <label for="formGroupExampleInput">Selecione o Pacote</label>
            <select id="package_id" name="package_id" class="form-control mb-4">
              <option value="">Selecione uma opção</option>
            </select>
          </div>
          <div class="form-group mb-4">
            <label for="formGroupExampleInput">Status</label><br>
            <select name="status" id="status" class="selectpicker">
              <option value="1">Ativado</option>
              <option value="0">Desativado</option>
            </select>
          </div>
          <div class="form-group mb-4">
            <label for="formGroupExampleInput">Vencimento</label>
            <input type="text" class="form-control" id="package_valid_until" name="package_valid_until" placeholder="Vencimento">
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
