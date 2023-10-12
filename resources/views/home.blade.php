@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Lista de Tareas
                </div>
                <div class="card-body">
                    <div class="todo-list">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <label>
                                    <input type="checkbox">
                                    <label for="packers" class="strikethrough">22,Dec Publish The Final
                                        Exam Result</label>
                                    <a href='#' class="ti-close"></a>
                                </label>
                            </li>
                            <div class="p-1"></div>
                            <li class="list-group-item">
                                <label>
                                    <input type="checkbox">
                                    <label for="packers" class="strikethrough">22,Dec Publish The Final
                                        Exam Result</label>
                                    <a href='#' class="ti-close"></a>
                                </label>
                            </li>
                            <div class="p-1"></div>
                            <li class="list-group-item">
                                <label>
                                    <input type="checkbox">
                                    <label for="packers" class="strikethrough">22,Dec Publish The Final
                                        Exam Result</label>
                                    <a href='#' class="ti-close"></a>
                                </label>
                            </li>
                            <div class="p-2"></div>
                        </ul>
                        <input type="text" class="tdl-new form-control" placeholder="Write new item and hit 'Enter'...">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
