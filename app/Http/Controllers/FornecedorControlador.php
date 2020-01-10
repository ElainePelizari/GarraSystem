<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Fornecedores;
use App\Enderecos;

class FornecedorControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forns = Fornecedores::all();
        return view('fornecedores/fornecedores', compact('forns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fornecedores/novoFornecedor');
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
            'razaoSocial'  => 'required|min:6',
            'inscEstadual' => 'required|min:10',
            'email' => 'required|email|unique:fornecedores',
            'fone' => 'required|min:11',
            'cnpj' => 'required|min:14|cnpj'
        ];
        $mensagens = [ 
            'razaoSocial.required' => 'A Razão Social é requerida.',
            'razaoSocial.min' => 'É necessário no mínimo 6 caracteres na razão social.',
            'required' => 'O atributo :attribute não pode estar em branco.',
            'email.required' => 'Digite um endereço de email.',
            'email.email' => 'Digite um endereço de email válido',
            'fone.min' => 'É necessário um número de telefone válido com DDD',
            'inscEstadual.min' => 'É necessário no mínimo 11 caracteres na inscrição estadual',
            'cnpj.min' => 'É necessário no mínimo 14 caracteres no CNPJ'
        ];
        $request->validate($regras, $mensagens);

        $numero = $request->input('numero');

        $end = Enderecos::where('numero', $numero)->first();
        echo($end);
        if(isset($end)){
            $forn = new Fornecedores();
            $forn->razaoSocial = $request->input('razaoSocial');
            $forn->cnpj = $request->input('cnpj');
            $forn->inscEstadual = $request->input('inscEstadual');
            $forn->email = $request->input('email');
            $forn->fone = $request->input('fone');
            $end->fornecedores()->save($forn);
         }
        else{
            $end = new Enderecos(); 
            $end->rua = $request->input('rua');
            $end->cep = $request->input('cep');
            $end->bairro = $request->input('bairro');
            $end->cidade = $request->input('cidade');
            $end->uf = $request->input('uf');
            $end->numero = $request->input('numero');
            $end->save();
            $forn = new Fornecedores();
            $forn->razaoSocial = $request->input('razaoSocial');
            $forn->cnpj = $request->input('cnpj');
            $forn->inscEstadual = $request->input('inscEstadual');
            $forn->email = $request->input('email');
            $forn->fone = $request->input('fone');
            $end->fornecedores()->save($forn);
        }

        return redirect('fornecedores');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $forn = Fornecedores::find($id);
        if(isset($forn)){
            return view('fornecedores/detalhesFornecedor', compact('forn'));
        }
        return redirect('fornecedores');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $forn = Fornecedores::find($id);
        if(isset($forn)){
            return view('fornecedores/editarFornecedor', compact('forn'));
        }
        return redirect('fornecedores');
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
        $forn = Fornecedores::find($id);
        if(isset($forn)){
            $forn->razaoSocial = $request->input('razaoSocial');
            $forn->cnpj = $request->input('cnpj');
            $forn->inscEstadual = $request->input('inscEstadual');
            $forn->email = $request->input('email');
            $forn->fone = $request->input('fone');
            $forn->save();
        }
        return redirect('fornecedores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $forn = Fornecedores::find($id);
        if(isset($forn)){
            $forn->delete();
        }
        return redirect('fornecedores');
    }
}
