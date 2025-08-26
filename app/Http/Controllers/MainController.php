<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controllear;
use App\Models\User;

class MainController extends Controller
{
    public function index()
    {
        $id = session('user.id');
        $usuario = User::find($id)->toArray();
        $notes = User::find($id)->notes()->get()->toArray();

        echo '<prev>';
        print_r($usuario);
        print_r($notes);

        // Pega o usuário autenticado
//        $user = session('user');
//          return view('home', compact('user'));
    }

    public function teste(): void
    {
        echo "deu certo teste";
    }
}
