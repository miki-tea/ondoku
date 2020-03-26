<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;
use App\Agenda;
use App\Comment;

class AgendaController extends Controller
{
    //
    public function index(int $id) {
        //選択中のグループの情報を取得する
        $selected_group = Group::find($id);

        //選択されたグループの全ての議題を取得する
        $agendas = Agenda::where('group_id', $selected_group->id)->get();
        $selected_agenda = Agenda::find($id);

        //議題に紐づくコメントの取得
        return view('groups/agenda', [
            'agenda' => $selected_agenda,
            'agendas' => $agendas,
        ]);
    }

    public function store(Request $request, int $id) {
        
        $post = new Agenda();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->user_id = 1; //TODO:ログイン認証ONにしたらAuth::id()に変更
        $post->group_id = $id;
        $post->save();
        
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
