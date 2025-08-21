<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function login()
    {
        return view("login");
    }

    public function loginSubmit(Request $request)
    {
        // form validation
        $request->validate(
            // rules
            [
                "text_username" => 'required|email',
                "text_password" => 'required|min:6|max:20',
            ],
            // errors messages
            [
                'text_username.required' => 'O username e obrigatorio',
                'text_username.email' => 'O username deve ser um email valido',
                'text_password.required' => 'A senha e obrigatoria',
                'text_password.min' => 'A senha deve ter no minimo 6 caracteres',
                'text_password.max' => 'A senha deve ter no maximo 20 caracteres',
            ]
        );

        // get user input
        $usuario = $request->input("text_username");
        $password = $request->input("text_password");

        echo "usuario: $usuario";
        echo '<br>';
        echo "password: $password";
        echo '<br>';

        // teste database connection
        try {
            DB::connection()->getPdo();
            echo 'Banco de dados conectado com sucesso!';
        } catch (\PDOException $e) {
            echo "Erro: "  . $e->getMessage();
        }
    }

    public function logout()
    {
        echo "logout";
    }
}
