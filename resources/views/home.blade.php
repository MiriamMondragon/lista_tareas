@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Mis Tareas Pendientes
                </div>
                <form action="/tarea" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="todo-list">
                            <ul id="list" class="list-group">
                                @foreach($user->tareas as $tarea)
                                <li class="list-group-item">
                                    <label class="container-checkbox">
                                        <input type="checkbox" name="check{{ $tarea->id }}">
                                        <label class="strikethrough">{{ $tarea->descripcion }}</label>
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <div class="p-1"></div>
                                @endforeach
                            </ul>
                            <div class="p-1"></div>
                            <input type="text" id="input_add" name="descripcion" class="tdl-new form-control @error('descripcion') is-invalid @enderror" placeholder="Para agregar una nueva tarea presione la tecla 'Enter'...">
                            @error('descripcion')
                                <p style="font-weight: bold; color: rgb(190, 21, 21); font-size: 12px">La descripción de la tarea es necesaria.</p>
                            @enderror
                        </div>
                    </div>
                    <div class="row pb-3 px-3">
                        <div class="col-6"></div>
                        <div class="col-3">
                            <button type="button" class="btn btn-outline-dark float-end">Eliminar Marcados</button>
                        </div>
                        <div class="col-3">
                            <button type="button" class="btn btn-outline-danger float-end">Eliminar Todos</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
