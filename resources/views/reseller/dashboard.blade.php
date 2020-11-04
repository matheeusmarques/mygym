@extends('layouts.app_reseller')

@section('content')

  <div class="layout-px-spacing">

    <div class="row layout-top-spacing">


      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 layout-spacing">
        <div class="widget widget-card-four">
          <div class="widget-content">
            <div class="w-content">
              <div class="w-info">
                <h6 class="value">{{$total_customers}}</h6>
                <p class="">Total de Clientes</p>
              </div>
              <div class="">
                <div class="w-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 layout-spacing">
          <div class="widget widget-card-four">
            <div class="widget-content">
              <div class="w-content">
                <div class="w-info">
                  <h6 class="value">{{$active_customers}}</h6>
                  <p class="">Clientes Ativos</p>
                </div>
                <div class="">
                  <div class="w-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-check"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><polyline points="17 11 19 13 23 9"></polyline></svg>                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 layout-spacing">
            <div class="widget widget-card-four">
              <div class="widget-content">
                <div class="w-content">
                  <div class="w-info">
                    <h6 class="value">{{$total_trial}}</h6>
                    <p class="">Total de Testes</p>
                  </div>
                  <div class="">
                    <div class="w-icon">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>                    </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
              <div class="widget widget-table-two">

                <div class="widget-heading">
                  <h5 class="">Regras</h5>
                </div>

                <div class="widget-content">
                  <p style="font-size: 14px;">
                    - <b>Proibido</b> usar nome, logo ou qualquer identidade visual do servidor para divulgação em GRUPOS de Facebook, WhatsApp, Telegram ou qualquer outro GRUPO em redes sociais.

                    <br><br>- <b>Proibido</b> usar o nome, logo ou qualquer identidade visual do servidor em qualquer tipo de divulgação, seja ela online, panfletos, cartões etc.

                    <br><br>- <b>Proibido</b> usar o nome, logo ou qualquer identidade visual do servidor em vendas através do Mercado Livre, Olx ou qualquer outro tipo de e-commerce ou plataforma de venda.
                    <br>
                    <br><br>- <b>Proibido</b> divulgar o link/url de acesso do painel de revenda.

                    <br>
                    <br>Ao cadastrar um cliente ou uma revenda no seu painel, você concorda automaticamente com as regras citadas acima.
                    <br>O descumprimento das regras citadas acima, resultará na exclusão do seu painel sem aviso prévio.
                    <br>
                    <br><br><b>*</b> As regras entraram em vigor no dia <u>11/11/2019</u> e podem ser alteradas sem aviso prévio.
                  </p>
                </div>
              </div>
            </div>

            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
              <div class="widget widget-table-three">

                <div class="widget-heading">
                  <h5 class="">Novidades</h5>
                </div>

                <div class="widget-content">
                  <p style="font-size: 14px;">
                    Estamos trazendo mais uma novidade para vocês, agora o seu cliente final pode Ativar ou Desativar a CDN a partir do dispositivo em que ele tiver assistindo.

                    <br><br>Muitas vezes em que o cliente está tendo travamento, se resolve simplesmente Ativando ou Desativando a CDN, mas nem sempre o Revendedor desse cliente está disponível para Ativar ou Desativar a CDN do mesmo.

                    <br><br>Pensando nisso, desenvolvemos uma maneira em que o próprio cliente final consiga de forma simples e rápida Ativar ou Desativar a CDN.

                    <br><br>Basta enviar o texto abaixo para o cliente que tiver reclamando de travamento, que ele mesmo vai conseguir Ativar ou Desativar a CDN e resolver o "problema".

                    <br><br>TEXTO PARA O CLIENTE (se preferir, modifique do seu jeito):

                    <br><br>Caso você ainda não saiba o que é CDN, clique no menu roxo "PARA QUE SERVE E COMO USAR A CDN?", e saiba mais...

                    <br><br>Esperamos que essa novidade possa ajudar vocês!
                  </p>
                </div>
              </div>
            </div>

            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
              <div class="widget widget-table-two">

                <div class="widget-heading">
                  <h5 class="">Últimas Séries Adicionadas</h5>
                </div>

                <div class="widget-content">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th><div class="th-content">Capa</div></th>
                          <th><div class="th-content">Nome</div></th>
                          <th><div class="th-content">Data</div></th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($last_tvshows as $tv)
                          <tr>
                            <td><div class="td-content customer-name"><img width="90px" height="90px" src="{{$tv->cover}}" alt="avatar"></div></td>
                            <td><div class="td-content product-brand">{{$tv->title}}</div></td>
                            <td><div class="td-content product-brand">{{date('d/m/Y', $tv->last_modified)}}</div></td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
              <div class="widget widget-table-three">

                <div class="widget-heading">
                  <h5 class="">Últimos Filmes Adicionados</h5>
                </div>

                <div class="widget-content">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th><div class="th-content">Capa</div></th>
                          <th><div class="th-content">Nome</div></th>
                          <th><div class="th-content">Data de Lançamento</div></th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($last_movies as $movie)
                          @php
                            $movie = json_decode($movie->movie_propeties);
                          @endphp
                            <tr>
                              <td><div class="td-content customer-name"><img width="90px" height="90px" src="{{$movie->movie_image}}" alt="avatar"></div></td>
                              <td><div class="td-content product-brand">{{$movie->name}}</div></td>
                              <td><div class="td-content product-brand">{{$movie->releasedate}}</div></td>
                            </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>

      @endsection
