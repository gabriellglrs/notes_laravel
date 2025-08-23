<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\password;

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
        $username = $request->input("text_username");
        $password = $request->input("text_password");

        echo "usuario: $username";
        echo '<br>';
        echo "password: $password";
        echo '<br>';

        // busca o usuario no banco de dados
        $user = User::where('email', $username)
            ->where('deleted_at', NULL)
            ->first();

        // testa se o usuario existe
        if (!$user) {
            return redirect()
                ->back()
                ->withInput()
                ->with('loginError', 'Username incorretos.');
        }

        // testa se a senha esta correta
        if (!password_verify($password, $user->password)) {
            return redirect()
                ->back()
                ->withInput()
                ->with('loginError', 'Password incorretos.');
        }

        // atualiza o ultimo login
        $user->last_login = date('Y-m-d H:i:s');
        $user->save();

        // cria a sessao do usuario
        session([
            'user' => [
                'id'=> $user->id,
                'email'=> $user->email,
                'last_login'=> $user->last_login,
            ]
        ]);
    }

    public function logout()
    {
        echo "logout";
    }
}
