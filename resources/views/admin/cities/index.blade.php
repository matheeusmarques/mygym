@extends('layouts.app_admin')

@section('content')

  <div class="layout-px-spacing">

    <div class="row layout-top-spacing">

      <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">

        <div class="widget-content widget-content-area br-6">
          <div class="table-responsive mb-4 mt-4">
            <table id="zero-config" class="table table-hover" style="width:100%">
              <div class="container-fluid">
                <div class="row">
                  <div class="col">
                    <div class="float-right">
                      <a href="#"
                      data-toggle="modal"
                      data-target="#modal-new-city"
                      class="btn btn-primary mb-3">Adicionar</a>
                    </div>
                  </div>

                </div>
              </div>
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nome</th>
                  <th>Sigla</th>
                  <th>Ações</th>
                </tr>
              </thead>
            </table>
          </div>
        </div>
      </div>

    </div>

  </div>
@endsection
