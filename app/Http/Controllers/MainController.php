<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\User;
use Illuminate\Http\Request;

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
        // Pega o usuário logado, por exemplo da sessão
        $user = session('user'); // ou Auth::user() se estiver usando o sistema de Auth do Laravel

        // Passa para a view
        return view('new_note', compact('user'));
    }

    public function newNoteSubmit(Request $request)
    {
        // validação do formulário
        $request->validate(
        // rules
            [
                'text_title' => 'required|min:3|max:200',
                'text_text' => 'required|min:3|max:3000',
            ],
            // errors messages
            [
                'text_title.required' => 'O titulo e obrigatorio',
                'text_title.min' => 'O titulo deve ter no minimo 3 caracteres',
                'text_title.max' => 'O titulo deve ter no maximo 200 caracteres',
                'text_text.required' => 'O texto e obrigatorio',
                'text_text.min' => 'O texto deve ter no minimo 3 caracteres',
                'text_text.max' => 'O texto deve ter no maximo 3000 caracteres',
            ]
        );

        $uuid = session('user.uuid'); // pegando uuid do usuário logado
        $note = new Note();
        $note->user_uuid = $uuid;
        $note->title = $request->text_title;
        $note->text = $request->text_text;
        $note->save();

        return redirect()->route('home')->with('success', 'Nota criada com sucesso!');
    }

    public function editNote($uuid)
    {

    }

    public function deleteNote($uuid)
    {
        $note = Note::where('uuid', $uuid)->firstOrFail();
        $note->delete();

        return redirect()->route('home')->with('success', 'Nota deletada com sucesso!');
    }
}
