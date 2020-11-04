@extends('layouts.app')

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
                      data-target="#modal-new-package"
                      class="btn btn-primary">Adicionar Pacote</a>
                    </div>
                  </div>

                </div>
              </div>
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nome</th>
                  <th>Descrição</th>
                  <th>Duração</th>
                  <th>Preço</th>
                  <th class="no-content"></th>
                  <th class="no-content"></th>
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
          </div>
        </div>
      </div>

    </div>

  </div>
@endsection
