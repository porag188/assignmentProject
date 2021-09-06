<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
  public function index(){
  $title = 'Welcome To laravel';
  return view('pages.index',compact('title'));
  }

  public function about(){
     $title = 'Welcome To About Page';
 //  return view('pages.about',compact('title'));
     return view('pages.about')->with('title',$title);

 }
 public function services(){
     $data=array(
       'title'=> 'All Services',
       'services'=>['Web App','MVP','Android']
     );
     return view('pages.services')->with($data);
   }
  
}
