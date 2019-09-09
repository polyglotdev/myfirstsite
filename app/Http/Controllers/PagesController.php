<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
  public function home()
  {
    $tasks = [
      'Go to the store',
      'Finish all your work',
      'Be willing to die on a treadmil',
      'Help Tesa be whatever she wants to be'
  ];
    return view('welcome')->withTasks($tasks)->withFoo('CodefulDom');
  }
}
