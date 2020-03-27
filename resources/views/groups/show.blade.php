
@extends('layouts.myapp')

@section('title','新規読書会作成')
@section('content')
  <div class="container mt-4">
    <div class="row">
      <div class="col">
        <div class="card mb-4 bg-info">
          <div class="card-header">
            <span class="text-white">読書会<span><h1 class="text-white ml-2 mb-0 h3">{{ $group->name }}</h1>
          </div>
          <ul class="list-group list-group-flush">
          <li class="list-group-item">
            <p class="text-dark">
              {{ $group->description }}
            </p>
            <small class="text-muted float-right mb-0">
            作成日：{{ $group->created_at->format("Y年m月d日") }}
            </small>
          </li>
          </ul>

        </div>
        <div class="card overflow-hidden mb-4">
          <div class="card-header">
            新規議題作成
          </div>
        <form action="" method="POST" class="p-4">
            @csrf
            <div class="form-froup">
              <label for="title" class="my-1">議題</label>
              <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="form-froup">
              <label for="body" class="my-1">詳細</label>
              <textarea name="body" id="body" cols="30" rows="5" class="form-control"></textarea>
            </div>
            <div>
              <input type="submit" class="btn btn-outline-info py-0 mt-2 float-right d-block" value="作成">
            </div>
          </form>
        </div>
        <div class="card mb-4">
          <div class="card-header">
            議題 一覧
          </div>
 
            <ul class="list-group list-group-flush">
              @forelse($agendas as $agenda)
              <li class="list-group-item">
                <a href="{{ route('agenda.index', ['id' => $agenda->id]) }}" class="">{{ $agenda->title }}</a>
                <small class="float-right text-muted">{{ $agenda->created_at->format('Y年m月d日')}}</small>
              </li>
              @empty
              <li class="list-group-item">
                議題はまだありません。
              </li>
              @endforelse
            </ul>
            
        </div>
      </div>
      <div class="">
        {{-- ここに読書会議題が表示される --}}
      </div>
    </div>
  </div>
@endsection