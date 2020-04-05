<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Group;
use App\Agenda;
use App\Comment;

class PostController extends Controller
{
    public function show(int $id){
        $mygroup = Group::find($id);
        $myagendas = Agenda::find($id);
        $mycomments = Comment::find($id);

        return view('mypage/index',[
            'groups' => $mygroup,
            'agendas' => $myagendas,
            'comments' => $mycomments,
        ]);
    }
}
