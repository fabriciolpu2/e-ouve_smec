<?php

namespace App\Http\Controllers;
use App\Chamado;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function listaChamados()
    {
        $chamados = Chamado::latest()->paginate();
        dd($chamados);
        return view('home', compact('chamados'));
    }
}
