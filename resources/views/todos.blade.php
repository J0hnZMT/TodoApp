@extends('layout')

@section('content')
<div class="row">
    <div class="col-lg-6 col-lg-offset-3">
        <br/>
        <h2>My Todos</h2>
    </div>
</div>
    
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <form action="/create/todo" method="post">
                {{ csrf_field() }}
                <input type="text" name="todo" class="form-control input-lg" placeholder="Create new todo">
            </form>
            <br/>
        </div>
    </div>
    
    <div class="row">
        @foreach($todos as $todo)
            {{ $todo->todo }} <a href="{{route('todo.delete',['id' => $todo->id])}}" class="btn btn-danger btn-xs">x</a>
            <a href="{{route('todo.update',['id' => $todo->id])}}" class="btn btn-info btn-xs">Update</a>
            @if(!$todo->completed)
                <a href="{{ route('todo.completed',['id' => $todo->id])}}" class="btn btn-success btn-xs"> Mark as Completed </a>
            @else
            <a href="" class="btn btn-success btn-xs">Complete</a>
            @endif
            <hr>
        @endforeach
    </div>
    
@stop
