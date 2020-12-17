<div class="modal fade" id="modal-new-user" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Novo Cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
        </button>
      </div>
      <div class="modal-body">
        <form id="form-new-user" method="POST">
          @csrf
          <div class="form-group mb-4">
            <label for="formGroupExampleInput">Nome</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Nome">
          </div>
          <div class="form-group mb-2">
            <label for="formGroupExampleInput">Sexo</label>
            <select id="gender" name="gender" class="form-control mb-4">
              <option value="M">Masculino</option>
              <option value="F">Feminino</option>
            </select>
          </div>
          <div class="form-group mb-4">
            <label for="formGroupExampleInput">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="E-mail">
          </div>
          <div class="form-group mb-4">
            <label for="formGroupExampleInput">Nascimento</label>
            <input type="text" class="form-control" id="birthday" name="birthday" placeholder="Data de Nascimento">
          </div>
          <div class="form-group mb-4">
            <label for="formGroupExampleInput">Celular</label>
            <input type="text" class="form-control" id="cellphone" name="cellphone" placeholder="Número do Celular">
          </div>
          <div class="form-group mb-2">
            <label for="formGroupExampleInput">Estado</label>
            <select id="state" name="state_id" class="form-control mb-4">
              <option value="">Selecione uma opção</option>
            </select>
          </div>
          <div id="cities" class="form-group mb-2">
            <label for="formGroupExampleInput">Cidade</label>
            <select id="city" name="city_id" class="form-control mb-4">
            </select>
          </div>
          <div class="form-group mb-2">
            <label for="formGroupExampleInput">Pacote</label>
            <select id="package" name="package_id" class="form-control mb-4">
              <option value="">Selecione uma opção</option>
            </select>
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
