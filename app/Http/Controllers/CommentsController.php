<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agenda;

class CommentsController extends Controller
{
    //
    public function store(Request $request)
    {
        $params = $request->validate([
            'agenda_id' => 'required | exists:posts, id',
            'body' =>'required | max:2500',
        ]);

        $post
    }
}
