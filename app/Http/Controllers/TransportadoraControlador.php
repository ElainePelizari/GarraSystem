<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Transportadoras;
use App\Enderecos;

class TransportadoraControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trans = Transportadoras::all();
        return view('transportadoras/transportadoras', compact('trans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('transportadoras/novoTransportador');
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
            $tran = new Transportadoras();
            $tran->razaoSocial = $request->input('razaoSocial');
            $tran->cnpj = $request->input('cnpj');
            $tran->inscEstadual = $request->input('inscEstadual');
            $tran->email = $request->input('email');
            $tran->fone = $request->input('fone');
            $end->transportadoras()->save($tran);
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
            $tran = new Transportadoras();
            $tran->razaoSocial = $request->input('razaoSocial');
            $tran->cnpj = $request->input('cnpj');
            $tran->inscEstadual = $request->input('inscEstadual');
            $tran->email = $request->input('email');
            $tran->fone = $request->input('fone');
            $end->transportadoras()->save($tran);
        }

        return redirect('transportadoras');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tran = Transportadoras::find($id);
        if(isset($tran)){
            return view('transportadoras/detalhesTransportadora', compact('tran'));
        }
        return redirect('transportadoras');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tran = Transportadoras::find($id);
        if(isset($tran)){
            return view('transportadoras/editarTransportadora', compact('tran'));
        }
        return redirect('transportadoras');
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
        $tran = Transportadoras::find($id);
        if(isset($tran)){
            $tran->razaoSocial = $request->input('razaoSocial');
            $tran->cnpj = $request->input('cnpj');
            $tran->inscEstadual = $request->input('inscEstadual');
            $tran->email = $request->input('email');
            $tran->fone = $request->input('fone');
            $tran->save();
        }
        return redirect('transportadoras');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tran = Transportadoras::find($id);
        if(isset($tran)){
            $tran->delete();
        }
        return redirect('transportadoras');
    }
}
