<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agenda;
use App\Comment;

class CommentsController extends Controller
{
    //
    public function store(Request $request, int $id) {
        
        $post = new Comment();
        $post->user_id = 1; //TODO:ログイン認証ONにしたらAuth::id()に変更
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
