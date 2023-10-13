@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Mis Tareas Pendientes - {{$usuario->name}}
                </div>
                <div class="card-body">
                    <div class="todo-list">
                        <ul id="list" class="list-group">
                            <li class="list-group-item">
                                <label class="container-checkbox">
                                    <input type="checkbox">
                                    <label class="strikethrough">Dato de prueba 1</label>
                                    <span class="checkmark"></span>
                                </label>
                            </li>
                            <div class="p-1"></div>
                            <li class="list-group-item">
                                <label class="container-checkbox">
                                    <input type="checkbox">
                                    <label class="strikethrough">Dato de prueba 2</label>
                                    <span class="checkmark"></span>
                                </label>
                            </li>
                            <div class="p-1"></div>
                            <li class="list-group-item">
                                <label class="container-checkbox">
                                    <input type="checkbox">
                                    <label class="strikethrough">Dato de prueba 3</label>
                                    <span class="checkmark"></span>
                                </label>
                            </li>
                        </ul>
                        <div class="p-2"></div>
                        <input type="text" id="input_add" class="tdl-new form-control" placeholder="Para agregar una nueva tarea presione la tecla 'Enter'...">
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
            </div>
        </div>
    </div>
</div>
@endsection
