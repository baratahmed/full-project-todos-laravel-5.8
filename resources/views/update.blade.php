@extends('layout')

@section('content')

            <form  action="{{route('save.todo',['id'=>$todo->id])}}" class="form-inline" method="post">
                {{csrf_field()}}
              <div class="form-group">               
                <input type="text" class="form-control mr-4" name="todo" id="todo" value="{{$todo->todo}}">
              </div>
              
                <button type="submit" class="btn btn-primary ">Update</button>
            
            </form>
@endsection