<?php

use App\Models\Agendamentos;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dados', function() {
	$registro = new Agendamentos;
	$registro->nome = "Rodrigo Alves";
	$registro->telefone = "(11)98522-9966";
	$registro->origem = "Whatsapp";
	$registro->data_contato = "2023-03-28";
	$registro->observacao = "Entrou em contato no dia 10.03.2023 interessado em um orçamento para formatação e instalação do Sistema Operacional Windows 10";
	$registro->save();

	return view('dados');
});
