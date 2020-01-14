<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Empresas;
use App\Enderecos;

class EmpresaControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empres = Empresas::all();
        return view('empresas/empresas', compact('empres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empresas/novaEmpresa');
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
            'email' => 'required|email|unique:empresas',
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
            $empre = new Empresas();
            $empre->razaoSocial = $request->input('razaoSocial');
            $empre->cnpj = $request->input('cnpj');
            $empre->inscEstadual = $request->input('inscEstadual');
            $empre->email = $request->input('email');
            $empre->fone = $request->input('fone');
            $end->empresas()->save($empre);
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
            $empre = new Empresas();
            $empre->razaoSocial = $request->input('razaoSocial');
            $empre->cnpj = $request->input('cnpj');
            $empre->inscEstadual = $request->input('inscEstadual');
            $empre->email = $request->input('email');
            $empre->fone = $request->input('fone');
            $end->empresas()->save($empre);
        }

        return redirect('empresas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $empre = Empresas::find($id);
        if(isset($empre)){
            return view('empresas/detalhesEmpresa', compact('empre'));
        }
        return redirect('empresas');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empre = Empresas::find($id);
        if(isset($empre)){
            return view('empresas/editarEmpresa', compact('empre'));
        }
        return redirect('empresas');
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
        $empre = Empresas::find($id);
        if(isset($empre)){
            $empre->razaoSocial = $request->input('razaoSocial');
            $empre->cnpj = $request->input('cnpj');
            $empre->inscEstadual = $request->input('inscEstadual');
            $empre->email = $request->input('email');
            $empre->fone = $request->input('fone');
            $empre->save();
        }
        return redirect('empresas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $empre = Empresas::find($id);
        if(isset($empre)){
            $empre->delete();
        }
        return redirect('empresas');
    }
}
