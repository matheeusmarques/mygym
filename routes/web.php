<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });



Auth::routes();


Route::get('/', function() {
  return redirect('/login');
});

Route::get( '/registrar', function() {
  $data = [
    'category_name' => 'auth',
    'page_name' => 'auth_boxed',
    'has_scrollspy' => 0,
    'scrollspy_offset' => '',
    'alt_menu' => 0,
  ];
  return view('auth.auth_register_boxed')->with($data);
});


Route::get('/password/reset', function() {
  return redirect('/login');
});

Route::group( ['middleware' => ['auth', 'admin']], function(){
  Route::namespace('Admin')->prefix('painel/admin')->as('admin.')->middleware('auth')->group(function(){

    Route::get('/home', 'HomeController@index');

    Route::get('/estados', function() {
      // $category_name = '';
      $data = [
        'category_name' => 'geo',
        'page_name' => 'states',
        'username' => Auth::user()->name,
        'role' => Auth::user()->role,
        'has_scrollspy' => 0,
        'scrollspy_offset' => '',
        'alt_menu' => 0,
      ];
      // $pageName = 'analytics';
      return view('admin/states/index')->with($data);
    });


    Route::get('/clientes/todos', function() {
      // $category_name = '';
      $data = [
        'category_name' => 'users',
        'page_name' => 'all-clients',
        'username' => Auth::user()->name,
        'role' => Auth::user()->role,
        'has_scrollspy' => 0,
        'scrollspy_offset' => '',
        'alt_menu' => 0,
      ];
      // $pageName = 'analytics';
      return view('admin/users/clients/index')->with($data);
    });

    Route::get('/clientes/ativos', function() {
      // $category_name = '';
      $data = [
        'category_name' => 'users',
        'page_name' => 'active-clients',
        'username' => Auth::user()->name,
        'role' => Auth::user()->role,
        'has_scrollspy' => 0,
        'scrollspy_offset' => '',
        'alt_menu' => 0,
      ];
      // $pageName = 'analytics';
      return view('admin/users/clients/index_active')->with($data);
    });

    Route::get('/clientes/vencidos', function() {
      // $category_name = '';
      $data = [
        'category_name' => 'users',
        'page_name' => 'inactive-clients',
        'username' => Auth::user()->name,
        'role' => Auth::user()->role,
        'has_scrollspy' => 0,
        'scrollspy_offset' => '',
        'alt_menu' => 0,
      ];
      // $pageName = 'analytics';
      return view('admin/users/clients/index_inactive')->with($data);
    });

    Route::get('/revendedores/masters', function() {
      // $category_name = '';
      $data = [
        'category_name' => 'resellers',
        'page_name' => 'master-resellers',
        'username' => Auth::user()->name,
        'role' => Auth::user()->role,
        'has_scrollspy' => 0,
        'scrollspy_offset' => '',
        'alt_menu' => 0,
      ];
      // $pageName = 'analytics';
      return view('admin/users/resellers/index')->with($data);
    });

    Route::get('/administradores', function() {
      // $category_name = '';
      $data = [
        'category_name' => 'admin',
        'page_name' => 'admin',
        'username' => Auth::user()->name,
        'role' => Auth::user()->role,
        'has_scrollspy' => 0,
        'scrollspy_offset' => '',
        'alt_menu' => 0,
      ];
      // $pageName = 'analytics';
      return view('admin/users/admin/index')->with($data);
    });

    Route::get('/pacotes/clientes', function() {
      // $category_name = '';
      $data = [
        'category_name' => 'clients-packages',
        'page_name' => 'clients-packages',
        'username' => Auth::user()->name,
        'role' => Auth::user()->role,
        'has_scrollspy' => 0,
        'scrollspy_offset' => '',
        'alt_menu' => 0,
      ];
      // $pageName = 'analytics';
      return view('admin/packages/clients')->with($data);
    });

    Route::get('/pacotes/revenda', function() {
      // $category_name = '';
      $data = [
        'category_name' => 'resell-packages',
        'page_name' => 'resell-packages',
        'username' => Auth::user()->name,
        'role' => Auth::user()->role,
        'has_scrollspy' => 0,
        'scrollspy_offset' => '',
        'alt_menu' => 0,
      ];
      // $pageName = 'analytics';
      return view('admin/packages/resell')->with($data);
    });


    Route::get('/financeiro/clientes', function() {
      // $category_name = '';
      $data = [
        'category_name' => 'invoices-admin',
        'page_name' => 'clients-invoices',
        'username' => Auth::user()->name,
        'role' => Auth::user()->role,
        'has_scrollspy' => 0,
        'scrollspy_offset' => '',
        'alt_menu' => 0,
      ];
      // $pageName = 'analytics';
      return view('admin/invoices/clients/index')->with($data);
    });

    Route::get('/financeiro/revendedores', function() {
      // $category_name = '';
      $data = [
        'category_name' => 'resellers-invoices',
        'page_name' => 'resellers-invoices',
        'username' => Auth::user()->name,
        'role' => Auth::user()->role,
        'has_scrollspy' => 0,
        'scrollspy_offset' => '',
        'alt_menu' => 0,
      ];
      // $pageName = 'analytics';
      return view('admin/invoices/resellers/index')->with($data);
    });

    Route::get('/configuracoes', 'SettingsController@index');
  });
});

Route::group( ['middleware' => ['auth', 'reseller']], function(){
  Route::namespace('Reseller')->prefix('painel/master')->as('reseller.')->middleware('auth')->group(function(){

    Route::get('/home', 'HomeController@index');

    Route::get('/clientes/todos', function() {
      // $category_name = '';
      $data = [
        'category_name' => 'users',
        'page_name' => 'all-clients',
        'username' => Auth::user()->name,
        'role' => Auth::user()->role,
        'has_scrollspy' => 0,
        'scrollspy_offset' => '',
        'alt_menu' => 0,
      ];
      // $pageName = 'analytics';
      return view('reseller/users/clients/index')->with($data);
    });

    Route::get('/clientes/ativos', function() {
      // $category_name = '';
      $data = [
        'category_name' => 'users',
        'page_name' => 'active-clients',
        'username' => Auth::user()->name,
        'role' => Auth::user()->role,
        'has_scrollspy' => 0,
        'scrollspy_offset' => '',
        'alt_menu' => 0,
      ];
      // $pageName = 'analytics';
      return view('reseller/users/clients/index_active')->with($data);
    });

    Route::get('/clientes/vencidos', function() {
      // $category_name = '';
      $data = [
        'category_name' => 'users',
        'page_name' => 'inactive-clients',
        'username' => Auth::user()->name,
        'role' => Auth::user()->role,
        'has_scrollspy' => 0,
        'scrollspy_offset' => '',
        'alt_menu' => 0,
      ];
      // $pageName = 'analytics';
      return view('reseller/users/clients/index_inactive')->with($data);
    });

  });
});


Route::group( ['middleware' => ['auth', 'admin']], function(){
  Route::namespace('Admin')->prefix('api/')->as('admin.')->middleware('auth')->group(function(){
    Route::get('/get_bouquets', 'APIController@get_bouquets');
    Route::get('/get_servers', 'APIController@get_servers');

    Route::get('/states/getdata', 'StateController@get_data');

    Route::post('/states/edit', 'StateController@edit');
    Route::post('/states/delete', 'StateController@delete');
    Route::post('/states/new', 'StateController@store');


    Route::post('/usuario/novo', 'UserController@store');

    Route::post('/clientes/editar', 'UserController@edit');
    Route::post('/clientes/cdn', 'UserController@cdn');

    Route::post('/clientes/gerarfatura', 'InvoicesController@generate_invoice');
    Route::post('/clientes/aprovarfatura', 'InvoicesController@approve_invoice');

    Route::get('/clientes/getdata', 'UserController@get_data');
    Route::get('/clientes/getdataactive', 'UserController@get_data_active');
    Route::get('/clientes/getdatainactive', 'UserController@get_data_inactive');

    Route::post('/revendedores/novo', 'UserController@store');

    Route::post('/revendedores/editar', 'UserController@edit');

    Route::post('/revendedores/master/gerarfatura', 'InvoicesController@generate_invoice_reseller');
    Route::post('/revendedores/master/aprovarfatura', 'InvoicesController@approve_invoice_reseller');

    Route::post('/revendedores/masters/novo', 'UserController@store_master');
    Route::post('/revendedores/masters/editar', 'UserController@edit_master');
    Route::post('/revendedores/masters/editarcreditos', 'UserController@add_credits');

    Route::get('/revendedores/masters/getdata', 'UserController@get_data_resellers_masters');
    Route::get('/revendedores/masters/getdataactive', 'UserController@get_data_active_resellers');
    Route::get('/revendedores/getdatainactive', 'UserController@get_data_inactive_resellers');


    Route::post('/administradores/novo', 'UserController@store_admin');
    Route::post('/administradores/editar', 'UserController@edit_admin');

    Route::get('/administradores/getdata', 'UserController@get_data_admins');

    Route::post('/pacotes/revenda/novo', 'PackagesController@store_reseller');
    Route::post('/pacotes/revenda/editar', 'PackagesController@edit_reseller');
    Route::post('/pacotes/revenda/deletar', 'PackagesController@delete');

    Route::get('/pacotes/revenda/getdatajson', 'PackagesController@get_data_json_resellers');
    Route::get('/pacotes/revenda/getdata', 'PackagesController@get_data_reseller');

    Route::post('/pacotes/clientes/novo', 'PackagesController@store');
    Route::post('/pacotes/clientes/editar', 'PackagesController@edit');
    Route::post('/pacotes/clientes/deletar', 'PackagesController@delete');

    Route::get('/pacotes/clientes/getdatajson', 'PackagesController@get_data_json');
    Route::get('/pacotes/clientes/getdata', 'PackagesController@get_data');

    Route::get('/faturas/getdataclients', 'InvoicesController@get_data_clients');
    Route::get('/faturas/getdataresellers', 'InvoicesController@get_data_resellers');

    Route::post('/configuracoes/salvar', 'SettingsController@store');
  });

});

Route::group( ['middleware' => ['auth', 'reseller']], function(){
  Route::namespace('Reseller')->prefix('api/masters/')->as('reseller.')->middleware('auth')->group(function(){
    Route::get('/get_bouquets', 'APIController@get_bouquets');

    Route::post('/clientes/novo', 'UserController@store');

    Route::post('/clientes/editar', 'UserController@edit');
    Route::post('/clientes/cdn', 'UserController@cdn');

    Route::post('/clientes/gerarfatura', 'InvoicesController@generate_invoice');
    Route::post('/clientes/aprovarfatura', 'InvoicesController@approve_invoice');

    Route::get('/clientes/getdata', 'UserController@get_data');
    Route::get('/clientes/getdataactive', 'UserController@get_data_active');
    Route::get('/clientes/getdatainactive', 'UserController@get_data_inactive');

    Route::get('/pacotes/clientes/getdatajson', 'PackagesController@get_data_json');
    Route::get('/pacotes/clientes/getdata', 'PackagesController@get_data');

    Route::post('/configuracoes/salvar', 'SettingsController@store');
  });

});
