@extends('layout')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h2 class="text-center">Update Task</h2>
        <form action="{{route('todos.save', ['id'=>$todo->id])}}" method="Post" >
            {{ csrf_field() }}
            <input class="form-control input-lg" type="text" value="{{$todo->todo}}" name="todo"><br>
            
            
        </form>
    </div>
</div>

@endsection
