<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;
use App\Agenda;

class AgendaController extends Controller
{
    //
    public function index(int $id) {
        //選択中のグループの情報を取得する
        $selected_group = Group::find($id);

        //選択されたグループの全ての議題を取得する
        $agendas = Agenda::where('group_id', $selected_group->id)->get();

        return view('agendas/index', [
            'group' => $selected_group,
            'agendas' => $agendas,
            ]);
    }
}
