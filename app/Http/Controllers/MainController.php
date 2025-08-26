<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function index()
    {
        // Pega o usuário autenticado
        $user = session('user');
          return view('home', compact('user'));
    }

    public function teste(): void
    {
        echo "deu certo teste";
    }
}
