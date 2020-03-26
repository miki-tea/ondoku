<?php

namespace App\Http\Controllers;

use App\Group;
use App\Agenda;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    //
    public function index(int $id) {

        //読書会グループの全ての情報を取得する
        $groups = Group::all();

        //選択されたグループの全ての情報を取得する
        $selected_group = Group::find($id);

        //選択されたグループの議題を全て取得する
        $agendas = Agenda::where('group_id', $selected_group->id)->get();

        return view('groups/index', [
            'groups' => $groups,
            'selected_group_id' => $id,
        ]);
    }
}
