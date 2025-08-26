<?php

namespace App\Http\Controllers;

use App\Models\User;

class MainController extends Controller
{
    public function index()
    {
        $id = session('user.id'); // pegando id do usuário logado
        $user = User::find($id); // pegando usuário logado com base no id

        // Carregando as notas do usuário
        $notes = $user->notes()->latest()->get(); // ordena da mais recente para a mais antiga

        return view('home', compact('user', 'notes'));
    }
}
