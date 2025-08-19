<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index($id) {
        $nome = "gabriel";
        return view('welcome')->with('id', $id);
    }

    public function sobre() {
        return view('sobre');
    }

    public function contato() {
        return view('contato');
    }
}
