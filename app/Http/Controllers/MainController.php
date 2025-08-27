<?php

namespace App\Http\Controllers;

use App\Models\Note;
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

    public function newNote()
    {
        //
    }

    public function editNote($uuid)
    {
        echo "editNote $uuid";
    }

    public function deleteNote($uuid)
    {
        $note = Note::where('uuid', $uuid)->firstOrFail();
        $note->delete();

        return redirect()->route('home')
            ->with('success', 'Nota deletada com sucesso!');
    }
}
