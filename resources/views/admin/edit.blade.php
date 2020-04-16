@extends('layouts.app')  

@section('content')
  <form action="{{route('editpost')}}" id="postForm">
            <div id="myDIV" class="header">
              <div class="row">
              	<div class="col-lg-12">
              			<h2>My To Do List</h2>
             		<div class="col-lg-12">
      		 			<input type="text" name="newTask" placeholder="Title..." form="postForm">       
             		</div>
              		<div class="col-lg-2">
              			<div class="action">
                	 			<a href="{{route('index')}}"><i class="addBtn">Edit</i></a>
              			</div>
              		</div>
              	</div>
              </div>	
            </div>
            <div class="row">
            	<div class="col-md-12">
            			<div class="action">
                	 		<a href="{{route('index')}}"><i class="addBtn">Back</i></a>
              			</div>
            	</div>
            </div>
        </form>
@endsection        