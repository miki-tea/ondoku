<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Agenda;
use App\Comment;

class CommentsController extends Controller
{
    //
    public function store(Request $request, int $id) {
        $validatedData = $request->validate([
            'body' => 'required|max:5000',
        ]);

        $post = new Comment();
        $post->user_id = Auth::id();
        $post->agenda_id = $id;
        $post->body = $request->body;
        $post->save();
        
        //選択中のグループの情報を取得する
        $selected_agenda = Agenda::find($id);

        //選択されたグループの全ての議題を取得する
        $comments = Comment::where('agenda_id', $selected_agenda->id)->get();

        return view('groups/agenda', [
            'agenda' => $selected_agenda,
            'comments' => $comments,
            ]);
    }

}
