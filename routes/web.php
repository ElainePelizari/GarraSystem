<?php

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

Route::get('/', function () {
    return view('index');
});
//Routes de clientes
Route::get('/clientes', 'ClienteControlador@index');
Route::get('/clientes/novo', 'ClienteControlador@create');
Route::post('/clientes', 'ClienteControlador@store');
Route::get('/clientes/detalhes/{id}', 'ClienteControlador@show');
Route::get('/clientes/apagar/{id}', 'ClienteControlador@destroy');
Route::get('/clientes/editar/{id}', 'ClienteControlador@edit');
Route::post('/clientes/{id}', 'ClienteControlador@update');

//Routes de fornecedores
Route::get('/fornecedores', 'FornecedorControlador@index');
Route::get('/fornecedores/novo', 'FornecedorControlador@create');
Route::post('/fornecedores', 'FornecedorControlador@store');
Route::get('/fornecedores/detalhes/{id}', 'FornecedorControlador@show');
Route::get('/fornecedores/apagar/{id}', 'FornecedorControlador@destroy');
Route::get('/fornecedores/editar/{id}', 'FornecedorControlador@edit');
Route::post('/fornecedores/{id}', 'FornecedorControlador@update');

//Routes de produtos
Route::get('/produtos', 'ProdutoGarraControlador@index');
Route::get('/produtos/novo', 'ProdutoGarraControlador@create');
Route::post('/produtos', 'ProdutoGarraControlador@store');
Route::get('/produtos/detalhes/{id}', 'ProdutoGarraControlador@show');
Route::get('/produtos/apagar/{id}', 'ProdutoGarraControlador@destroy');
Route::get('/produtos/editar/{id}', 'ProdutoGarraControlador@edit');
Route::post('/produtos/{id}', 'ProdutoGarraControlador@update');

//Routes de transportadoras
Route::get('/transportadoras', 'TransportadoraControlador@index');
Route::get('/transportadoras/novo', 'TransportadoraControlador@create');
Route::post('/transportadoras', 'TransportadoraControlador@store');
Route::get('/transportadoras/detalhes/{id}', 'TransportadoraControlador@show');
Route::get('/transportadoras/apagar/{id}', 'TransportadoraControlador@destroy');
Route::get('/transportadoras/editar/{id}', 'TransportadoraControlador@edit');
Route::post('/transportadoras/{id}', 'TransportadoraControlador@update');

//Routes de controle de estoque
Route::get('/estoques', 'EstoqueControlador@index');
Route::get('/estoques/novo', 'EstoqueControlador@create');
Route::post('/estoques', 'EstoqueControlador@store');
Route::get('/estoques/detalhes/{id}', 'EstoqueControlador@show');
Route::get('/estoques/apagar/{id}', 'EstoqueControlador@destroy');
Route::get('/estoques/editar/{id}', 'EstoqueControlador@edit');
Route::post('/estoques/{id}', 'EstoqueControlador@update');

//Routes de empresas
Route::get('/empresas', 'EmpresaControlador@index');
Route::get('/empresas/novo', 'EmpresaControlador@create');
Route::post('/empresas', 'EmpresaControlador@store');
Route::get('/empresas/detalhes/{id}', 'EmpresaControlador@show');
Route::get('/empresas/apagar/{id}', 'EmpresaControlador@destroy');
Route::get('/empresas/editar/{id}', 'EmpresaControlador@edit');
Route::post('/empresas/{id}', 'EmpresaControlador@update');

//Routes de funcionarios
Route::get('/funcionarios', 'FuncionarioControlador@index');
Route::get('/funcionarios/novo', 'FuncionarioControlador@create');
Route::post('/funcionarios', 'FuncionarioControlador@store');
Route::get('/funcionarios/detalhes/{id}', 'FuncionarioControlador@show');
Route::get('/funcionarios/apagar/{id}', 'FuncionarioControlador@destroy');
Route::get('/funcionarios/editar/{id}', 'FuncionarioControlador@edit');
Route::post('/funcionarios/{id}', 'FuncionarioControlador@update');


