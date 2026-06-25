<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class criarcontaController extends Controller
{
    public function index()
    {
        return view('criarconta');
    }

    public function add(Request $dados)
    {
        $validator = Validator::make(
            $dados->all(),
            [
                'nome' => 'required|min:3|max:255',
                'email' => 'required|email|max:255|unique:usuario,email',
                'senha' => 'required|min:6|max:255'
            ],
            [
                'nome.required' => 'O campo nome é obrigatório.',
                'nome.min' => 'O nome deve ter no mínimo 3 caracteres.',

                'email.required' => 'O campo email é obrigatório.',
                'email.email' => 'Informe um email válido.',
                'email.unique' => 'Este email já está cadastrado.',

                'senha.required' => 'A senha é obrigatória.',
                'senha.min' => 'A senha deve ter no mínimo 6 caracteres.'
            ]
        );

        if ($validator->fails()) {
            return redirect()
                ->route('criarconta.index')
                ->withErrors($validator)
                ->withInput();
        }

        \App\Models\UsuarioModel::create([
            'nome' => $dados->nome,
            'email' => $dados->email,
            'senha' => md5($dados->senha)
        ]);

        return redirect()
            ->route('criarconta.index')
            ->with('successCadastro', 'Conta criada com sucesso!');
    }

    public function login(Request $dados)
    {
        $validator = Validator::make(
            $dados->all(),
            [
                'email' => 'required|email',
                'senha' => 'required'
            ],
            [
                'email.required' => 'Informe o email.',
                'email.email' => 'Informe um email válido.',
                'senha.required' => 'Informe a senha.'
            ]
        );

        if ($validator->fails()) {
            return redirect()
                ->route('criarconta.index')
                ->withInput();
        }

        $usuario = \App\Models\UsuarioModel::where('email', $dados->email)
            ->where('senha', md5($dados->senha))
            ->first();

        if (!$usuario) {
            return redirect()
                ->route('criarconta.index')
                ->with('errorLogin', 'Email ou senha inválidos.');
        }

        Session::put('usuario_id', $usuario->id);
        Session::put('usuario_nome', $usuario->nome);

        return redirect()->route('inicio');
    }
}