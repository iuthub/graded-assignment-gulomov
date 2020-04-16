<?php
	
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
     public function index(	)
    {
    	$title ='My To Do List';
    	return view('pages.index')->with('title',$title);
    }
    public function about(){
    	$title ='About';
    	return view('pages.about')->with('title',$title);
    }
    public function edit(){
    	return view('admin.edit');
    }
     public function delete(){
    	return 'this post is goint to be delete';
    }
    public function editpost(){
    	return view('admin.edit');
    }
  
}
