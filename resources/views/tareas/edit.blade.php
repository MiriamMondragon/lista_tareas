@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Editar Tarea
                </div>
                <form action="/tarea/{{ $tarea->id }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="card-body">
                        <div class="todo-list">
                            <div class="p-1"></div>
                            <input type="hidden" name="tareaId" value="{{ $tarea->id }}" required>
                            <input type="text" id="input_add" name="descripcion" class="tdl-new form-control @error('descripcion') is-invalid @enderror" value="{{ old('descripcion') ?? $tarea->descripcion }}" required autocomplete="descripcion" placeholder="Para agregar una nueva tarea presione la tecla 'Enter'...">
                            @error('descripcion')
                                <p style="font-weight: bold; color: rgb(190, 21, 21); font-size: 12px">La descripción de la tarea es necesaria.</p>
                            @enderror
                        </div>
                    </div>
                    <div class="row pb-3 px-3">
                        <div class="col-6"></div>
                        <div class="col-3">
                            <a href="{{ route('tareas.show') }}" class="btn btn-outline-dark float-end">Regresar</a>
                        </div>
                        <div class="col-3">
                            <button type="submit" class="btn btn-outline-success float-end">Modificar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
