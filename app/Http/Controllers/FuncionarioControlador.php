<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Funcionarios;
use App\Enderecos;

class FuncionarioControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $funs = Funcionarios::all();
        return view('funcionarios/funcionarios', compact('funs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('funcionarios/novoFuncionario');
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
            'nome'  => 'required|min:3',
            'email' => 'required|email|unique:funcionarios',
            'fone' => 'required|min:11',
            'dataNasc' => 'required|min:8'
        ];
        $mensagens = [ 
            'nome.required' => 'O nome é requerido.',
            'nome.min' => 'É necessário no mínimo 3 caracteres no nome.',
            'required' => 'O atributo :attribute não pode estar em branco.',
            'email.required' => 'Digite um endereço de email.',
            'email.email' => 'Digite um endereço de email válido',
            'fone.min' => 'É necessário um número de telefone válido com DDD',
            'dataNasc.min' => 'É necessário no mínimo 8 caracteres na data de nascimento'
        ];
        $request->validate($regras, $mensagens);

        $numero = $request->input('numero');

        $end = Enderecos::where('numero', $numero)->first();
        echo($end);
        if(isset($end)){
            $fun = new Funcionarios();
            $fun->nome = $request->input('nome');
            $fun->dataNasc = $request->input('dataNasc');
            $fun->email = $request->input('email');
            $fun->fone = $request->input('fone');
            $end->funcionarios()->save($fun);
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
            $fun = new Funcionarios();
            $fun->nome = $request->input('nome');
            $fun->dataNasc = $request->input('dataNasc');
            $fun->email = $request->input('email');
            $fun->fone = $request->input('fone');
            $end->funcionarios()->save($fun);
        }

        return redirect('funcionarios');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fun = Funcionarios::find($id);
        if(isset($fun)){
            return view('funcionarios/detalhesFuncionario', compact('fun'));
        }
        return redirect('funcionarios');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fun = Funcionarios::find($id);
        if(isset($fun)){
            return view('funcionarios/editarFuncionario', compact('fun'));
        }
        return redirect('funcionarios');
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
        $fun = Funcionarios::find($id);
        if(isset($empre)){
            $fun->nome = $request->input('nome');
            $fun->dataNasc = $request->input('dataNasc');
            $fun->email = $request->input('email');
            $fun->fone = $request->input('fone');
            $empre->save();
        }
        return redirect('funcionarios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fun = Funcionarios::find($id);
        if(isset($fun)){
            $fun->delete();
        }
        return redirect('funcionarios');
    }
}
