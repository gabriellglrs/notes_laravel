<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        // return view("login");
        echo "deu certo index";
    }

    public function teste()
    {
        echo "deu certo teste";
    }
}
