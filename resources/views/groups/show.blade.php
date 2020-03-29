
@extends('layouts.app')

@section('title','新規読書会作成')
@section('content')
<nav aria-label="パンくずリスト">
  <ol class="breadcrumb py-1 rounded-0">
    <li class="breadcrumb-item"><a href="{{ url('/') }}">読書会一覧</a></li>
    <li class="breadcrumb-item active" aria-current="page">読書会「{{ $group->name }}」</li>
  </ol>
</nav>
  <div class="container my-4">
      <div class="col-md-9 mx-auto">
        <div class="card mb-4 bg-info">
          <div class="card-header">
            <span class="text-white">読書会<span><h1 class="text-white ml-2 mb-0 h3">{{ $group->name }}</h1>
          </div>
          <ul class="list-group list-group-flush">
          <li class="list-group-item">
            <p class="text-dark">
              {{ $group->description }}
            </p>
            <small class="float-right text-muted">投稿者ID:{{ $group->user_id}}</small>
            <small class="text-muted float-right mb-0 mr-2">
            作成日:{{ $group->created_at->format("Y年m月d日") }}
            </small>
          </li>
          </ul>

        </div>

        <div class="card mb-4 bg-info">
          <div class="card-header text-white">
            議題 一覧
          </div>
            <ul class="list-group list-group-flush">
              @forelse($agendas as $agenda)
              <li class="list-group-item">
                <a href="{{ route('agenda.index', ['id' => $agenda->id]) }}" class="">{{ $agenda->title }}</a>
                <div class="pt-1">
                  <small class="float-right text-muted">投稿者ID:{{ $agenda->user_id}}</small>
                  <small class="float-right text-muted mr-2">作成日:{{ $agenda->created_at->format('Y年m月d日')}}</small>
                </div>
              </li>
              @empty
              <li class="list-group-item">
                議題はまだありません。
              </li>
              @endforelse
            </ul>
          </div>
        <div class="d-flex justify-content-center align-items-center p-2">
          {{$agendas->links()}}
        </div>
        <div class="card overflow-hidden mb-4">
          <div class="card-header">
            新規議題作成
          </div>
          <form action="" method="POST" class="p-4">
            @csrf
            <div class="form-froup">
            <label for="title" class="my-1">議題<small class="text-danger pl-2">{{ $errors->first('title')}}</small></label>
            <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}">
            </div>
            <div class="form-froup">
              <label for="body" class="my-1">本文<small class="text-danger pl-2">{{ $errors->first('body')}}</small></label>
            <textarea name="body" id="body" cols="30" rows="5" class="form-control"> {{ old('body')}}</textarea>
            </div>
            <div>
              <input type="submit" class="btn btn-outline-info py-0 mt-2 float-right d-block" id="btn-new" value="作成">
            </div>
          </form>

        </div>
        <a href="{{ url('/') }}" class="d-block mt-2">Back</a>
      </div>
  </div>
@endsection