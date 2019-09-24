<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class CadastroCLiente extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cadastrocliente');
    }
    public function create()
{
    return view('cadastrocliente');
}
public function store(Request $request)
{
    //faço as validações dos campos
    //vetor com as mensagens de erro
    $messages = array(
        'name.required' => 'É obrigatório um nome para o fornecedor',
        'email.required' => 'É obrigatório um email para o fornecedor',
        'password.required' => 'É obrigatório o rua do fornecedor',
        'bairro.required' => 'É obrigatório o rua do fornecedor',
        'rua.required' => 'É obrigatório o rua do fornecedor',
        'uf.required' => 'É obrigatório um estado para o fornecedor',
        'cidade.required' => 'É obrigatória uma cidade para o fornecedor',
    );
    //vetor com as especificações de validações
    $regras = array(
        'nome' => 'required|string|max:255',
        'email' => 'required',
        'endereço' => 'required|string',
        'uf' => 'required|string',
        'cidade' => 'required|string',
    );
    //cria o objeto com as regras de validação
    $validador = Validator::make($request->all(), $regras, $messages);
    //executa as validações
    if ($validador->fails()) {
        return redirect('fornecedor/create')
        ->withErrors($validador)
        ->withInput($request->all);
    }
    //se passou pelas validações, processa e salva no banco...
    $obj_Fornecedor = new fornecedor();
    $obj_Fornecedor->nome =       $request['nome'];
    $obj_Fornecedor->email = $request['email'];
    $obj_Fornecedor->endereço = $request['endereço'];
    $obj_Fornecedor->uf     = $request['uf'];
    $obj_Fornecedor->cidade     = $request['cidade'];
    $obj_Fornecedor->save();
    return redirect('/')->with('success', 'Fornecedor criado com sucesso!!');
}
}