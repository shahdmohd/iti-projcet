<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController
{
    function create()
    {
        return view('home');
    }

    function create2()
    {
        return view('signup');
    }
    function create3()
    {
        return view('login');
    }
    function create4()
    {
        return view('profile');
    }
    function create5()
    {
        return view('postPage');
    }
    function create6()
    {
        return view('CreatePost');
    }
    function create7()
    {
        return view('EditPost');
    }
    function create8()
    {
        return view('edit-profile');
    }
}
