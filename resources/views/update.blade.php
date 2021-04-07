@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <br/>
            <h2>Update Todo</h2>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-12">
            <form action="{{route('todo.save',['id' => $todo->id])}}" method="post">
                {{ csrf_field() }}
                <input type="text" name="todo" class="form-control input-lg" value="{{ $todo->todo }}" placeholder="Create new todo">
            </form>
            <br/>
        </div>
    </div>
    
    
    
@stop

