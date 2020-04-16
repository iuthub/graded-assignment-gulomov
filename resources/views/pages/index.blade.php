@extends('layouts.app')  

@section('content')
        <form action="" id="postForm">
            <div id="myDIV" class="header">
              <h2>{{$title}}</h2>
              <input type="text" name="newTask" placeholder="Title..." form="postForm">
              <button type="submit" class="addBtn">Add</button>
            </div>
        </form>
        <ul id="myUL">
          <li>
            <div class="task">
                Hit the gym
            </div>
            <div class="action">
                <a href="{{route('edit')}}"><i class="fa fa-edit"></i></a>
            </div>
            <div class="action">
                <a href="{{route('delete')}}"><i class="fa fa-trash-alt"></i></a> 
            </div>
          </li>
          <li>
            <div class="task">
               Make some food
            </div>
            <div class="action">
                <a href="{{route('edit')}}"><i class="fa fa-edit"></i></a>
            </div>
            <div class="action">
                <a href=""><i class="fa fa-trash-alt"></i></a> 
            </div>
          </li>
          <li>
            <div class="task">
               Finish quiz
            </div>
            <div class="action">
                <a href="{{route('edit')}}"><i class="fa fa-edit"></i></a>
            </div>
            <div class="action">
                <a href=""><i class="fa fa-trash-alt"></i></a> 
            </div>
          </li>
        </ul>
@endsection        