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
    

        //選択された議題の情報を$idを元に取得する
        $selected_agenda = Agenda::find($id);
        //選択されたグループの全ての議題を取得する
        $comments = Comment::where('agenda_id',$id)->paginate(5);

        //パンくずリスト用に読書会の名前取得
        $group = Agenda::find($id)->group->name;

        return view('groups/agenda', [
            'agenda' => $selected_agenda,
            'comments' => $comments,
            'group' => $group,
            ]);
    }

}
