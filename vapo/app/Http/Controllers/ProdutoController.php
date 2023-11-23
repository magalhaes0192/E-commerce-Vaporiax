<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produtos = Produto::all();
        $produtoNovo = Produto::where('novoProduto', true)->paginate(4);
        $novosProdutos = Produto::where('recemProduto', true)->get();
        $destaqueProdutos = Produto::where('destaque', true)->get();
        $bemAvaliado = Produto::where('bemAvaliado', true)->get();
        $promocaoDia = Produto::where('promocaoDia', true)->get();

        return view('welcome' , compact('novosProdutos','destaqueProdutos', 'bemAvaliado', 'promocaoDia', 'produtos','produtoNovo'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
