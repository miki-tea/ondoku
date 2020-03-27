@extends('layouts.template')
@section('title','ページタイトル')
@section('content')
    <main>
      <div class="container my-4">
        <div class="input-group my-3 mx-auto col-6">
          <input type="text" class="form-control" placeholder="読書会を検索">
          <span class="input-group-append">
            <button type="button" class="btn btn-info"><i class="fas fa-search text-white"></i></button>
          </span>
        </div>
        <div class="card">
          <div class="card-header">
            読書会 一覧
          </div>
          <ul class="list-group list-group-flush">
            @foreach($groups as $group)
            <li class="list-group-item">
                <a href="{{ route('group.show', ['id' => $group->id]) }}">{{ $group->name }}</a>
            </li>
            @endforeach
          </ul>
        </div>
        <button class="btn btn-info container py-2 my-2">
          <a href="{{ route('group.new')}}" class="text-white d-block">新しい読書会を作る</a>
        </button>
      </div>
    </main>
@endsection