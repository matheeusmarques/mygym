@extends('layouts.app')

@section('content')

  <div class="layout-px-spacing">

    <div class="row layout-top-spacing">

      <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
        <div class="widget-content widget-content-area br-6">
          <div class="row">
            <div class="col-xl-12 col-md-12 col-sm-12 col-12 text-center">
              <h4>Configurações Gerais</h4>
            </div>
          </div>
          <form id="form-settings">
            @csrf
            <div class="form-group mb-4">
              <label for="formGroupExampleInput2">Nome do Servidor</label>
              <input type="text" class="form-control" id="server_name" name="server_name" value="@isset($settings){{$settings->server_name}}@endisset"placeholder="Nome do Servidor">
            </div>
            <div class="form-group mb-4">
              <label for="formGroupExampleInput">DNS</label>
              <input type="text" class="form-control" id="server_dns" name="server_dns" value="@isset($settings){{$settings->server_dns}}@endisset"placeholder="URL e PORTA do Servidor">
            </div>
            <div class="form-group mb-4">
              <label for="formGroupExampleInput">DNS Alternativo</label>
              <input type="text" class="form-control" id="alternative_dns" name="alternative_dns" value="@isset($settings){{$settings->alternative_dns}}@endisset" placeholder="DNS e PORTA alternativos">
            </div>
            <div class="form-group mb-4">
              <label for="formGroupExampleInput">Servidor CDN</label>
              <select name="server_cdn" id="server_cdn" class="form-control mb-4">
                <option>Escolha o servidor</option>
              </select>
            </div>
            <button type="submit" name="Salvar" class="btn btn-primary">Salvar</button>
          </form>
        </div>
      </div>

    </div>

  </div>
@endsection
