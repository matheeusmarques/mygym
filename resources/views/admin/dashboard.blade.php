@extends('layouts.app_admin')

@section('content')

  <div class="layout-px-spacing">

    <div class="row layout-top-spacing">


      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 layout-spacing">
        <div class="widget widget-card-four">
          <div class="widget-content">
            <div class="w-content">
              <div class="w-info">
                <h6 class="value">3000</h6>
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
                  <h6 class="value">1000</h6>
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
                    <h6 class="value">2000</h6>
                    <p class="">Clientes Inativos</p>
                  </div>
                  <div class="">
                    <div class="w-icon">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>                    </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
              <div class="widget widget-chart-one">
                <div class="widget-heading">
                  <h5 class="">Revenue</h5>
                  <ul class="tabs tab-pills">
                    <li><a href="javascript:void(0);" id="tb_1" class="tabmenu">Monthly</a></li>
                  </ul>
                </div>

                <div class="widget-content">
                  <div class="tabs tab-content">
                    <div id="content_1" class="tabcontent">
                      <div id="revenueMonthly"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
              <div class="widget widget-chart-two">
                <div class="widget-heading">
                  <h5 class="">Clientes</h5>
                </div>
                <div class="widget-content">
                  <div id="chart-2" class=""></div>
                </div>
              </div>
            </div>


            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
              <div class="widget widget-table-two">

                <div class="widget-heading">
                  <h5 class="">Últimos Clientes</h5>
                </div>

                <div class="widget-content">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th><div class="th-content">Nome</div></th>
                          <th><div class="th-content">Email</div></th>
                          <th><div class="th-content">Data de Cadastro</div></th>
                        </tr>
                      </thead>
                      <tbody>
                        {{-- @foreach ($last_customers as $c)
                          <tr>
                            <td><div class="td-content customer-name"><img src="{{asset('storage/img/90x90.jpg')}}" alt="avatar">{{$c->name}}</div></td>
                            <td><div class="td-content product-brand">{{$c->email}}</div></td>
                            <td><div class="td-content product-brand">{{$c->created_at}}</div></td>
                          </tr>
                        @endforeach --}}
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
              <div class="widget widget-table-three">

                <div class="widget-heading">
                  <h5 class="">Últimas Compras</h5>
                </div>

                <div class="widget-content">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th><div class="th-content">Método</div></th>
                          <th><div class="th-content th-heading">Valor</div></th>
                          <th><div class="th-content th-heading">E-mail</div></th>
                          <th><div class="th-content">Status</div></th>
                        </tr>
                      </thead>
                      <tbody>
                        {{-- @foreach ($last_invoices as $i)
                            <tr>
                              @if ($i->method == 'MercadoPago')
                                <td><div class="td-content product-name"><img src="{{asset('https://i.imgur.com/LYvA2Mx.png')}}" alt="product">MercadoPago</div></td>
                              @else
                                <td><div class="td-content product-name"><img src="{{asset('https://i.imgur.com/p25sFSL.png')}}" alt="product">Outros</div></td>
                              @endif
                              <td><div class="td-content"><span class="pricing">R${{$i->price}}</span></div></td>
                              <td><div class="td-content"><span class="discount-pricing">{{$i->user->email}}</span></div></td>
                              @if ($i->status == 'Pendente')
                                <td><div class="td-content"><span class="badge badge-info">Pendente</span></div></td>
                              @endif
                              @if ($i->status == 'Aprovado')
                                <td><div class="td-content"><span class="badge badge-success">Aprovado</span></div></td>
                              @endif
                              @if ($i->status == 'Cancelado')
                                <td><div class="td-content"><span class="badge badge-danger">Cancelado</span></div></td>
                              @endif
                            </tr>
                        @endforeach --}}
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>

      @endsection
