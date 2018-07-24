@extends('layout')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <form action="/create/todo" method="Post" >
            {{ csrf_field() }}
            <input class="form-control input-lg" type="text" placeholder="Enter your task here.." name="todo"><br>
            
            
        </form>
    </div>
</div>
<p><br></p>
      @foreach($todos as $todo) 
        <div class="list-group">
           
            <a href="#" class="list-group-item active">Todo</a>
             
            <a href="#" class="list-group-item">{{ $todo->todo }}</a>
          <p><a href="{{route('todo.update', ['id'=>$todo->id])}}" type="submit" class="btn btn-success btn-sm">Edit <i class="fa fa-pencil"></i></a>
            <a href="{{route('todo.delete', ['id'=>$todo->id])}}" type="submit" class="btn btn-danger btn-sm">Delete <i class="fa fa-trash"></i></a>
           @if(!$todo->completed)
            <a href="{{route('todos.completed', ['id'=>$todo->id])}}" type="submit" class="btn btn-danger btn-sm">Mark as completed <i class="fa fa-heart"></i></a>

            @else
            <span class="text-success">Completed!  <i class="fa fa-check"></i></span>
           @endif
        </p>
               
        </div><br>
        @endforeach  

@endsection
