@if ($page_name != 'coming_soon' && $page_name != 'contact_us' && $page_name != 'error404' && $page_name != 'error500' && $page_name != 'error503' && $page_name != 'faq' && $page_name != 'helpdesk' && $page_name != 'maintenence' && $page_name != 'privacy' && $page_name != 'auth_boxed' && $page_name != 'auth_default')

  <!--  BEGIN SIDEBAR  -->
  <div class="sidebar-wrapper sidebar-theme">

    <nav id="sidebar">
      <div class="profile-info">
        <figure class="user-cover-image"></figure>
        <div class="user-info">
          <img src="{{asset('storage/img/90x90.jpg')}}" alt="avatar">
          <h6 class="">{{$username}}</h6>
          <p class="">@php
          if($role == 1){
            echo 'Administrador';
          }elseif($role == 0){
            echo 'Cliente';
          }elseif($role == 2){
            echo 'Revendedor Master';
          }elseif($role == 3){
            echo 'Revendedor';
          }
          @endphp</p>
        </div>
      </div>
      <div class="shadow-bottom"></div>
      <ul class="list-unstyled menu-categories" id="accordionExample">

        @if ($page_name != 'alt_menu' && $page_name != 'blank_page' && $page_name != 'boxed' && $page_name != 'breadcrumb' )

          <li class="menu {{ ($category_name === 'dashboard') ? 'active' : '' }}">
            <a href="{{url('painel/master/home')}}" aria-expanded="{{ ($category_name === 'dashboard') ? 'true' : 'false' }}" class="dropdown-toggle">
              <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                <span>Dashboard</span>
              </div>
            </a>
          </li>

          <li class="menu md-visible menu-heading">
            <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus"><line x1="5" y1="12" x2="19" y2="12"></line></svg><span>Apps</span></div>
          </li>

          <li class="menu {{ ($page_name === 'chat') ? 'active' : '' }} md-visible">
            <a href="/apps/chat" aria-expanded="{{ ($page_name === 'chat') ? 'true' : 'false' }}" class="dropdown-toggle">
              <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                <span>Chat</span>
              </div>
            </a>
          </li>

          <li class="menu {{ ($page_name === 'mailbox') ? 'active' : '' }} md-visible">
            <a href="/apps/mailbox" aria-expanded="{{ ($page_name === 'mailbox') ? 'true' : 'false' }}" class="dropdown-toggle">
              <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                <span>Mailbox</span>
              </div>
            </a>
          </li>

          <li class="menu {{ ($page_name === 'todo-list') ? 'active' : '' }} md-visible">
            <a href="/apps/todoList" aria-expanded="{{ ($page_name === 'todo-list') ? 'true' : 'false' }}" class="dropdown-toggle">
              <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                <span>Todo List</span>
              </div>
            </a>
          </li>

          <li class="menu {{ ($page_name === 'notes') ? 'active' : '' }} md-visible">
            <a href="/apps/notes" aria-expanded="{{ ($page_name === 'notes') ? 'true' : 'false' }}" class="dropdown-toggle">
              <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                <span>Notes</span>
              </div>
            </a>
          </li>

          <li class="menu {{ ($page_name === 'scrumboard') ? 'active' : '' }} md-visible">
            <a href="/apps/scrumboard" aria-expanded="{{ ($page_name === 'scrumboard') ? 'true' : 'false' }}" class="dropdown-toggle">
              <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-plus"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="12" y1="18" x2="12" y2="12"></line><line x1="9" y1="15" x2="15" y2="15"></line></svg>
                <span>Scrumboard</span>
              </div>
            </a>
          </li>

          <li class="menu {{ ($page_name === 'contacts') ? 'active' : '' }} md-visible">
            <a href="/apps/contacts" aria-expanded="{{ ($page_name === 'contacts') ? 'true' : 'false' }}" class="dropdown-toggle">
              <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                <span>Contacts</span>
              </div>
            </a>
          </li>

          <li class="menu {{ ($page_name === 'invoice') ? 'active' : '' }} md-visible">
            <a href="/apps/invoice" aria-expanded="{{ ($page_name === 'invoice') ? 'true' : 'false' }}" class="dropdown-toggle">
              <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                <span>Invoice List</span>
              </div>
            </a>
          </li>

          <li class="menu {{ ($page_name === 'calendar') ? 'active' : '' }} md-visible">
            <a href="/apps/calendar" aria-expanded="{{ ($page_name === 'calendar') ? 'true' : 'false' }}" class="dropdown-toggle">
              <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                <span>Calendar</span>
              </div>
            </a>
          </li>

          <li class="menu menu-heading">
            <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus"><line x1="5" y1="12" x2="19" y2="12"></line></svg><span>USUÁRIOS</span></div>
          </li>

          <li class="menu {{ ($category_name === 'users') ? 'active' : '' }}">
            <a href="#components" data-toggle="collapse" aria-expanded="{{ ($category_name === 'users') ? 'true' : 'false' }}" class="dropdown-toggle">
              <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                <span>Clientes</span>
              </div>
              <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
              </div>
            </a>
            <ul class="collapse submenu list-unstyled {{ ($category_name === 'users') ? 'show' : '' }}" id="components" data-parent="#accordionExample">
              <li class="{{ ($page_name === 'all-clients') ? 'active' : '' }}">
                <a href="{{url('painel/master/clientes/todos')}}"> Todos </a>
              </li>
              <li class="{{ ($page_name === 'active-clients') ? 'active' : '' }}">
                <a href="{{url('painel/master/clientes/ativos')}}"> Ativos </a>
              </li>
              <li class="{{ ($page_name === 'inactive-clients') ? 'active' : '' }}">
                <a href="{{url('painel/master/clientes/vencidos')}}"> Vencidos  </a>
              </li>
              {{-- <li class="{{ ($page_name === 'trial') ? 'active' : '' }}">
              <a href="{{url('painel/admin/clientes/testes')}}"> Testes </a>
            </li> --}}
          </ul>
        </li>

        <li class="menu {{ ($category_name === 'resellers') ? 'active' : '' }}">
          <a href="#resellers" data-toggle="collapse" aria-expanded="{{ ($category_name === 'resellers') ? 'true' : 'false' }}" class="dropdown-toggle">
            <div class="">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><line x1="20" y1="8" x2="20" y2="14"></line><line x1="23" y1="11" x2="17" y2="11"></line></svg>              <span>Revendedores</span>
            </div>
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </div>
          </a>
          <ul class="collapse submenu list-unstyled {{ ($category_name === 'resellers') ? 'show' : '' }}" id="resellers" data-parent="#accordionExample">
            <li class="{{ ($page_name === 'master-resellers') ? 'active' : '' }}">
              <a href="{{url('painel/admin/revendedores/masters')}}"> Comuns </a>
            </li>
            {{-- <li class="{{ ($page_name === 'commun-resellers') ? 'active' : '' }}">
            <a href="{{url('painel/admin/revendedores/desativados')}}"> Comuns </a>
          </li> --}}
        </ul>
      </li>


      {{-- <li class="menu {{ ($category_name === 'admin') ? 'active' : '' }}">
        <a href="{{url('painel/admin/administradores')}}" aria-expanded="{{ ($category_name === 'admin') ? 'true' : 'false' }}" class="dropdown-toggle">
          <div class="">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-check"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><polyline points="17 11 19 13 23 9"></polyline></svg>
            <span>Administradores</span>
          </div>
        </a>
      </li> --}}


      <li class="menu menu-heading">
        <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus"><line x1="5" y1="12" x2="19" y2="12"></line></svg><span>RELATÓRIOS</span></div>
      </li>

      <li class="menu {{ ($category_name === 'clients-packages') ? 'active' : '' }}">
        <a href="{{url('painel/admin/pacotes/clientes')}}" aria-expanded="{{ ($category_name === 'clients-packages') ? 'true' : 'false' }}" class="dropdown-toggle">
          <div class="">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-package"><line x1="16.5" y1="9.4" x2="7.5" y2="4.21"></line><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
            <span>Clientes</span>
          </div>
        </a>
      </li>
      <li class="menu {{ ($category_name === 'resell-packages') ? 'active' : '' }}">
        <a href="{{url('painel/admin/pacotes/revenda')}}" aria-expanded="{{ ($category_name === 'resell-packages') ? 'true' : 'false' }}" class="dropdown-toggle">
          <div class="">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-package"><line x1="16.5" y1="9.4" x2="7.5" y2="4.21"></line><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
            <span>Revenda</span>
          </div>
        </a>
      </li>

      <li class="menu menu-heading">
        <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus"><line x1="5" y1="12" x2="19" y2="12"></line></svg><span>CONTA</span></div>
      </li>

      <li class="menu {{ ($category_name === 'geral-settings') ? 'active' : '' }}">
        <a href="{{url('painel/admin/configuracoes')}}" aria-expanded="{{ ($category_name === 'geral-settings') ? 'true' : 'false' }}" class="dropdown-toggle">
          <div class="">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
            <span>Configurações Gerais</span>
          </div>
        </a>
      </li>


      {{-- <li class="menu menu-heading">
        <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus"><line x1="5" y1="12" x2="19" y2="12"></line></svg><span>FINANCEIRO</span></div>
      </li>

      <li class="menu {{ ($category_name === 'invoices-admin') ? 'active' : '' }}">
        <a href="{{url('painel/admin/financeiro/clientes/')}}" aria-expanded="{{ ($category_name === 'clients-invoices') ? 'true' : 'false' }}" class="dropdown-toggle">
          <div class="">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>                <span>Clientes</span>
          </div>
        </a>
      </li>
      <li class="menu {{ ($category_name === 'resellers-invoices') ? 'active' : '' }}">
        <a href="{{url('painel/admin/financeiro/revendedores')}}" aria-expanded="{{ ($category_name === 'resellers-invoices') ? 'true' : 'false' }}" class="dropdown-toggle">
          <div class="">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>                <span>Revenda</span>
          </div>
        </a>
      </li>

      <li class="menu menu-heading">
        <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus"><line x1="5" y1="12" x2="19" y2="12"></line></svg><span>SISTEMA</span></div>
      </li>

      <li class="menu {{ ($category_name === 'geral-settings') ? 'active' : '' }}">
        <a href="{{url('painel/admin/configuracoes')}}" aria-expanded="{{ ($category_name === 'geral-settings') ? 'true' : 'false' }}" class="dropdown-toggle">
          <div class="">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
            <span>Configurações Gerais</span>
          </div>
        </a>
      </li> --}}
      {{-- <li class="menu {{ ($category_name === 'bootstrap_basic_table') ? 'active' : '' }}">
        <a href="{{url('painel/admin/pacotes/clientes')}}" aria-expanded="{{ ($category_name === 'bootstrap_basic_table') ? 'true' : 'false' }}" class="dropdown-toggle">
          <div class="">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layout"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>
            <span>Revenda</span>
          </div>
        </a>
      </li> --}}

      {{-- <li class="menu {{ ($category_name === 'users') ? 'active' : '' }}">
      <a href="#users" data-toggle="collapse" aria-expanded="{{ ($category_name === 'users') ? 'true' : 'false' }}" class="dropdown-toggle">
      <div class="">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
      <span>Users</span>
    </div>
    <div>
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
  </div>
</a>
<ul class="collapse submenu list-unstyled {{ ($category_name === 'users') ? 'show' : '' }}" id="users" data-parent="#accordionExample">
<li class="{{ ($page_name === 'profile') ? 'active' : '' }}">
<a href="/users/profile"> Profile </a>
</li>
<li class="{{ ($page_name === 'account_settings') ? 'active' : '' }}">
<a href="/users/account_settings"> Account Settings </a>
</li>
</ul>
</li> --}}


@else



@endif

</ul>

</nav>

</div>
<!--  END SIDEBAR  -->

@endif
