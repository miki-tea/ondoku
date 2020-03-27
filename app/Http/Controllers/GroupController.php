<?php

namespace App\Http\Controllers;

use App\Group;
use App\Agenda;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    //読書会一覧ページを表示
    public function index(int $id) {

        //読書会グループの全ての情報を取得する
        $groups = Group::all();

        //　前読書会グループの情報をビューに渡して返す
        return view('groups/index', [
            'groups' => $groups,
        ]);
    }

    // グループの詳細ページを表示する
    public function show(int $id) {

    //選択中のグループの情報を取得する
    $selected_group = Group::find($id);

    //選択されたグループの全ての議題を取得する
    $agendas = Agenda::where('group_id', $selected_group->id)->get();
    
    //取得した情報を連想配列につめてビューを返す
    return view('groups/show', [
        'group' => $selected_group,
        'agendas' => $agendas,
        ]);
    }

    //グループ新規作成ページの表示を行う
    public function new(){
        return view('groups/new');
    }
    //グループの新規作成処理を行う
    public function store(Request $request,int $id) {
        // post送信の内容をDBに保存
        $post = new Group();
        $post->name = $request->name;
        $post->description = $request->description;
        $post->user_id = 1; //TODO:ログイン実装時に変更
        // 表示するコンテンツを取得・表示
        $this->index($id);
    }
}
