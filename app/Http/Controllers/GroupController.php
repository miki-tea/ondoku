<?php

namespace App\Http\Controllers;

use App\Group;
use App\Agenda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class GroupController extends Controller
{
    //読書会一覧ページを表示
    public function index() {

        //読書会グループの全ての情報を取得する
        // $groups = Group::all();
        $groups = DB::table('groups')->paginate(10);


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
        $agendas = Agenda::where('group_id', $selected_group->id)->paginate(10);
        
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
    public function store(Request $request) {
        $validatedData = $request->validate([
            'g_name' => 'required|unique:groups,name|max:100',
            'description' => 'required|max:5000',
        ]);
        // post送信の内容をDBに保存
        $group = new Group();
        $group->name=$request->g_name;
        $group->description=$request->description;
        $group->user_id= Auth::id();
        $group->save();
        
        //読書会一覧ページに戻る。
        return  redirect ('/groups');
    }

    public function search(Request $request) {
        $keyword = $request->name;

        if(!empty($keyword)){
            $query = Group::query();
            $countTarget = $query->where('name','like','%' .($keyword). '%');
            $count = $countTarget->count();
            $groups = $query->where('name','like','%' .($keyword). '%')->paginate(15);
            $message = "「". $keyword ."」をグループ名に含む読書会の検索が完了しました。";

            return view('/groups/search',[
                'groups' => $groups,
                'message' => $message,
                'count' => $count
            ]);
        }
    }
}
