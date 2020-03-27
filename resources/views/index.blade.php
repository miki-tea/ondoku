@extends('layouts.myapp')
@section('title','読書会一覧')
@section('content')
  <div class="container">
    <h1 class="h3 font-weight-bold mt-4 text-info">読書会</h1>
        <div class="input-group my-3 mx-auto">
          <input type="text" class="form-control" placeholder="読書会を検索">
          <span class="input-group-append">
            <button type="button" class="btn btn-info"><i class="fas fa-search text-white"></i></button>
          </span>
        </div>
    <div class="card text-white bg-info mt-4">
      <div class="card-header">
        全ての読書会一覧 <small class="pl-3 text-light">全て見る&raquo;</small>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item"><a href="" class="">サンプル</a></li>
        <li class="list-group-item"><a href="" class="">サンプル</a></li>
        <li class="list-group-item"><a href="" class="">サンプル</a></li>
        <li class="list-group-item"><a href="" class="">サンプル</a></li>
        <li class="list-group-item"><a href="" class="">サンプル</a></li>
        <li class="list-group-item"><a href="" class="">サンプル</a></li>
      </ul>
    </div>
    <button class="btn btn-outline-info container py-2 my-2">
      <a href="{{ route('group.new')}}" class="d-block"><span>新しい読書会を作る</span></a>
    </button>  
  </div>
@endsection