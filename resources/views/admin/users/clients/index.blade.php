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
                      data-target="#modal-new-user"
                      class="btn btn-primary">Adicionar Cliente</a>
                    </div>
                  </div>

                </div>
              </div>
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nome</th>
                  <th>Email</th>
                  <th>Pacote</th>
                  <th>Status</th>
                  <th>Data de Cadastro</th>
                  <th>Data de Vencimento</th>
                  <th>Ações</th>
                </tr>
              </thead>
              <tbody>
                {{-- <tr>
                  <td>Garrett Winters</td>
                  <td>Accountant</td>
                  <td>Tokyo</td>
                  <td>63</td>
                  <td>2011/07/25</td>
                  <td><a class="btn btn-outline-success"><strong>Ativar CDN</strong></a></td>
                  <td><a class="btn btn-outline-primary"><strong>Editar Usuário</strong></a></td>
                  <td><a class="btn btn-outline-primary"><strong>Excluir Usuário</strong></a></td>
                </tr> --}}
              </tbody>
            </table>
          </div>
        </div>
      </div>

    </div>

  </div>
@endsection
