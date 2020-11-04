<div class="modal fade" id="modal-cdn" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Habilitar/Desabilitar CDN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
        </button>
      </div>
      <div class="modal-body">
        <form id="form-cdn" method="POST">
          @csrf
          <div class="form-group mb-4">
            <p id="message"></p>
            <mark id="username"class="bg-primary br-6"></mark>
            <input type="hidden" class="form-control" id="id" name="id">
          </div>
        <div class="modal-footer">
          <input type="submit" class="btn btn-primary"></input>
          <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Fechar</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
