<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ProdutosGarra;

class ProdutoGarraControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prods = ProdutosGarra::all();
        return view('produtos/produtos', compact('prods'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produtos/novoProduto');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $regras = [
            'nome'  => 'required|min:6',
            'tamanho' => 'required',
            'tipo' => 'required',
            'quantidade' => 'required',
            'cor' => 'required',
            'preco' => 'required',
        ];
        $mensagens = [ 
            'nome.required' => 'O nome é requerido.',
            'nome.min' => 'É necessário no mínimo 6 caracteres no nome.',
            'required' => 'O atributo :attribute não pode estar em branco.',
        ];

        $request->validate($regras, $mensagens);

        $prod = new ProdutosGarra();
        $prod->nome = $request->input('nome');
        $prod->tamanho = $request->input('tamanho');
        $prod->tipo = $request->input('tipo');
        $prod->quantidade = $request->input('quantidade');
        $prod->cor = $request->input('cor');
        $prod->preco = $request->input('preco');
        $prod->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prod = ProdutosGarra::find($id);
        if(isset($prod)){
            return view('produtos/detalhesProduto', compact('prod'));
        }
        return redirect('produtos');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prod = ProdutosGarra::find($id);
        if(isset($prod)){
            return view('produtos/editarProduto', compact('prod'));
        }
        return redirect('produtos');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $prod = ProdutosGarra::find($id);
        if(isset($prod)){
            $prod = new ProdutosGarra();
            $prod->nome = $request->input('nome');
            $prod->tamanho = $request->input('tamanho');
            $prod->tipo = $request->input('tipo');
            $prod->quantidade = $request->input('quantidade');
            $prod->cor = $request->input('cor');
            $prod->preco = $request->input('preco');
            $prod->save();
        }
        return redirect('produtos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prod = ProdutosGarra::find($id);
        if(isset($prod)){
            $prod->delete();
        }
        return redirect('produtos');
    }
}
