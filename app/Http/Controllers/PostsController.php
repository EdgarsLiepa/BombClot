<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()

    {

      return view ('posts.home');

    }

    public function show()

    {

      return view ('posts.show');

    }


    public function top()

    {

      return view ('posts.top100');

    }
}
