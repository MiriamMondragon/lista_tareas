<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Auth;

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
    public function index()
    {
        $userId = Auth::id();
        $user = User::findOrFail($userId);
        return view('home', ['user' => $user,]);
    }

    public function store()
    {
        $data = request()->validate([
            'descripcion' => 'required',
        ]);

        auth()->user()->tareas()->create($data);
        
        $userId = Auth::id();
        $user = User::findOrFail($userId);
        return view('home', ['user' => $user,]);
    }
}
