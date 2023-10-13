<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Tarea;

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
        return to_route('tareas.show', ['user' => $user]);
    }

    public function edit($tareaId){
        $userId = Auth::id();
        $user = User::findOrFail($userId);
        $tarea = Tarea::findOrFail($tareaId);
        $this->authorize('update', $tarea);
        return view('tareas.edit', compact('tarea'));
    }

    public function update(){
        $data = request()->validate([
            'descripcion' => 'required',
        ]);

        $tareaId = request()->input('tareaId');
        $tarea = Tarea::findOrFail($tareaId);

        $userId = Auth::id();
        $user = User::findOrFail($userId);

        $this->authorize('update', $tarea);
        Tarea::where('user_id', $userId)->where('id', $tareaId)->update($data);

        return to_route('tareas.show', ['user' => $user]);
    }

    public function delete(){
        $userId = Auth::id();
        $user = User::findOrFail($userId);
        $tareaId = 0;
        $tareas = [];
        foreach(request()->input('check') as $tareaId){
            array_push($tareas, $tareaId);
            $tareaId = $tareaId;
        }
        $tarea = Tarea::findOrFail($tareaId);
        $this->authorize('delete', $tarea);
        Tarea::where('user_id', $userId)->whereIn('id', $tareas)->delete();

        return to_route('tareas.show', ['user' => $user]);
    }
}
