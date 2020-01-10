<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Clientes;
use App\Enderecos;

class ClienteControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cats = Clientes::all();
        return view('clientes/clientes', compact('cats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes/novoCliente');
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
            'email' => 'required|email|unique:clientes',
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
            $cat = new Clientes();
            $cat->razaoSocial = $request->input('razaoSocial');
            $cat->cnpj = $request->input('cnpj');
            $cat->inscEstadual = $request->input('inscEstadual');
            $cat->email = $request->input('email');
            $cat->fone = $request->input('fone');
            $end->clientes()->save($cat);
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
            $cat = new Clientes();
            $cat->razaoSocial = $request->input('razaoSocial');
            $cat->cnpj = $request->input('cnpj');
            $cat->inscEstadual = $request->input('inscEstadual');
            $cat->email = $request->input('email');
            $cat->fone = $request->input('fone');
            $end->clientes()->save($cat);
        }

        return redirect('clientes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cat = Clientes::find($id);
        if(isset($cat)){
            return view('clientes/detalhesCliente', compact('cat'));
        }
        return redirect('clientes');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cat = Clientes::find($id);
        if(isset($cat)){
            return view('clientes/editarCliente', compact('cat'));
        }
        return redirect('clientes');
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
        $cat = Clientes::find($id);
        if(isset($cat)){
            $cat->razaoSocial = $request->input('razaoSocial');
            $cat->cnpj = $request->input('cnpj');
            $cat->inscEstadual = $request->input('inscEstadual');
            $cat->email = $request->input('email');
            $cat->fone = $request->input('fone');
            $cat->save();
        }
        return redirect('clientes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat = Clientes::find($id);
        if(isset($cat)){
            $cat->delete();
        }
        return redirect('clientes');
    }
}
