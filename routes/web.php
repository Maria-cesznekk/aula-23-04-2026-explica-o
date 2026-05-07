<?php

use App\Livewire\Movimentacao\MovimentacaoCreat;
use App\Livewire\Movimentacao\MovimentacaoIndex;
use App\Livewire\Produto\ProdutoCreate;
use App\Livewire\Produto\ProdutoEdit;
use App\Livewire\Produto\ProdutoIndex;
use Illuminate\Support\Facades\Route;

Route::get('produto/create', ProdutoCreate::class)->name('produto.create');
Route::get('produto/edit/{id}', ProdutoEdit::class)->name('produto.edit');
Route::get('produto/index', ProdutoIndex::class)->name('produto.index');
Route::get('movimentacao/creat', MovimentacaoCreat::class)->name('movimentacao.creat');
Route::get('movimentacao/index', MovimentacaoIndex::class)->name('movimentacao.index');
