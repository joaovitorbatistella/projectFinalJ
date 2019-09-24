<?php

namespace App\Http\Controllers;
use \Illuminate\Support\Facades\Validator;
use App\cliente;
use Illuminate\Http\Request;

class clienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cadastrocliente');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cadastrocliente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    //faço as validações dos campos
    //vetor com as mensagens de erro
    /*
            $table->string('nivel');
            $table->string('telefone');
            $table->string('cpf');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('rua');
            $table->string('numero');
            $table->string('cidade');
            $table->string('uf');
            $table->string('bairro');
    */
    $messages = array(
        'name.required' => 'É obrigatório um nome para o cliente',
        'email.required' => 'É obrigatório um email para o cliente',
        'password.required' => 'É obrigatório uma  senha para o cliente',
        'bairro.required' => 'É obrigatório o bairro do cliente',
        'rua.required' => 'É obrigatório a rua do cliente',
        'uf.required' => 'É obrigatório um estado para o cliente',
        'cidade.required' => 'É obrigatória uma cidade para o cliente',
        'nivel.required' => 'É obrigatória um nível para o cliente',
        'numero.required' => 'É obrigatório uma nº para o cliente',
        'cpf.required' => 'É obrigatório um cpf para o cliente',
        'telefone.required' => 'É obrigatória um telefone para o cliente',
    );
    //vetor com as especificações de validações
    $regras = array(
        'name' => 'required|string|max:255',
        'email' => 'required',
        'password' => 'required|string',
        'bairro' => 'required|string',
        'rua' => 'required|string',
        'uf' => 'required|string',
        'cidade' => 'required|string',
        'nivel' => 'required|string',
        'numero' => 'required|string',
        'cpf' => 'required|string',
        'telefone' => 'required|string',
    );
    //cria o objeto com as regras de validação
    $validador = Validator::make($request->all(), $regras, $messages);
    //executa as validações
    if ($validador->fails()) {
        return redirect('cliente/create')
        ->withErrors($validador)
        ->withInput($request->all);
    }
    //se passou pelas validações, processa e salva no banco...
    $obj_Cliente = new cliente();
    $obj_Cliente->name =       $request['name'];
    $obj_Cliente->email = $request['email'];
    $obj_Cliente->password = $request['password'];
    $obj_Cliente->bairro     = $request['bairro'];
    $obj_Cliente->rua     = $request['rua'];
    $obj_Cliente->uf     = $request['uf'];
    $obj_Cliente->cidade     = $request['cidade'];
    $obj_Cliente->nivel     = $request['nivel'];
    $obj_Cliente->numero     = $request['numero'];
    $obj_Cliente->cpf     = $request['cpf'];
    $obj_Cliente->telefone     = $request['telefone'];
    $obj_Cliente->save();
    return redirect('/')->with('success', 'Cliente criado com sucesso!!');
}

    /**
     * Display the specified resource.
     *
     * @param  \App\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cliente $cliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(cliente $cliente)
    {
        //
    }
}
