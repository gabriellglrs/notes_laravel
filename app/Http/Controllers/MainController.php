<?php

namespace App\Http\Controllers;

use App\Models\User;

class MainController extends Controller
{
    public function index()
    {
        $uuid = session('user.uuid'); // pegando uuid do usuário logado
        $user = User::find($uuid); // pegando usuário logado com base no uuid

        // Carregando as notas do usuário
        $notes = $user->notes()->latest()->get(); // ordena da mais recente para a mais antiga

        return view('home', compact('user', 'notes'));
    }
}
