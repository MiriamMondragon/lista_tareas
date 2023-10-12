<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TareasController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($usuario)
    {
        $usuario = User::find($usuario);
        return view('home', ['usuario' => $usuario,]);
    }
}
