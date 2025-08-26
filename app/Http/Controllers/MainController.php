<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        // Pega o usuário autenticado
        $user = session('user');
          return view('home', compact('user'));
    }

    public function teste()
    {
        echo "deu certo teste";
    }
}
