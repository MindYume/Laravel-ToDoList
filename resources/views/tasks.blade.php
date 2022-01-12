@extends('layouts.app')

@section('content')
    
    <h6>Laravel ToDoList</h6>
    <form action="{{ url('task') }}" method="POST" class="form-inline">
        @csrf
        <div class="row">
            <div class="col-9">
                <input type="text" name="name" placeholder="New Task Name" class="form-control">
            </div>
            <div class="col">
                <button type="submit" class="btn btn-outline-success">
                    Add Task
                </button>
            </div>
        </div>
    </form>
    <br>

    @include('common.errors')

    @if (count($tasks) > 0)
        @foreach ($tasks as $task)
            <div class="row">
                <div class="col-9">{{ $task->name }}</div>
                <div class="col">
                <form action="{{ url('task/'.$task->id) }}" method="POST">
                    @csrf
                    @method('delete')

                    <button type="submit" class="btn btn-outline-danger"><i class="fas fa-trash"></i>
                        Delete 
                    </button>
                </form>
                </div>
            </div>
            <br>
        @endforeach
    @endif

@endsection
