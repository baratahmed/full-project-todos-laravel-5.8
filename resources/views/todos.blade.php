@extends('layout')

@section('content')

            <form  action="{{route('create.todo')}}" class="form-inline ml-5" method="post">
                {{csrf_field()}}
              <div class="form-group">               
                <input type="text" class="form-control mr-4" name="todo" id="todo" placeholder="Create New Todo...">
              </div>
              
                <button type="submit" class="btn btn-primary ">Create</button>
            
            </form>

    <hr>
    @foreach($todos as $todo)
        <ul type="square">
            <li class="text-left">{{$todo->todo}}
            <a href="{{route('delete.todo',['id'=>$todo->id])}}" class="btn btn-danger">Delete</a>
            <a href="{{route('update.todo',['id'=>$todo->id])}}" class="btn btn-info">Edit</a>
            @if(!$todo->completed)
                <a href="{{route('todos.completed',['id'=>$todo->id])}}" class="btn btn-success">Mark as completed</a></li>
            @else
                <span class="text-success">Completed</span>
            @endif
            </li>
        </ul>
        <hr>
    @endforeach
@endsection