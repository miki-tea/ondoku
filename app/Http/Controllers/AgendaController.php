<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;
use App\Agenda;
use App\Comment;

class AgendaController extends Controller
{
    //
    public function show(int $id) {
        //選択された議題の情報を$idを元に取得する
        $selected_agenda = Agenda::find($id);
        //選択されたグループの全ての議題を取得する
        $comments = Comment::where('agenda_id',$id)->paginate(3);

        //議題に紐づくコメントの取得
        return view('groups/agenda', [
            'agenda' => $selected_agenda,
            'comments' => $comments,
        ]);
    }

    public function store(Request $request, int $id) {
        
        $validatedData = $request->validate([
            'title' => 'required|max:100',
            'body' => 'required|max:5000',
        ]);

        $agenda = new Agenda();
        $agenda->title = $request->title;
        $agenda->body = $request->body;
        $agenda->user_id = 1; //TODO:ログイン認証ONにしたらAuth::id()に変更
        $agenda->group_id = $id;
        $agenda->save();
        
        //選択中のグループの情報を取得する
        $selected_group = Group::find($id);

        //選択されたグループの全ての議題を取得する
        $agendas = Agenda::where('group_id', $selected_group->id)->get();

        return view('groups/show', [
            'group' => $selected_group,
            'agendas' => $agendas,
            ]);
    }
}
