
@extends('layouts.myapp')

@section('title','新規読書会作成')
@section('content')
    <div class="co-md-12 my-4">
      <div class="col-md-8 mx-auto">
        <div class="border border-info rounded p-4 overflow-hidden">
          <div class="mb-2">
            <p class="mb-1 text-info">議題</p>
            <h1 class="h3 pl-2">{{ $agenda->title}}</h1>
            <p class="pl-3 mb-1">{{ $agenda->body}}</p>
            <div class="text-right">
              <small>投稿日：{{ $agenda->updated_at->format('Y年m月d日')}}</small>
              <small>投稿者ID：{{ $agenda->user_id }}</small>
            </div>
          </div>
          <div>
            @forelse($agenda->comments as $comment)
              <div class="border-top border-info">
                <p class="my-1 p-1">{{ $comment->body }}</p>
                <div class="text-right">
                  <small class="text-muted">投稿日：{{ $comment->created_at->format('Y年m月d日') }}</small>
                  <small class="text-muted">投稿者ID：{{ $comment->user_id }}</small>
                </div>
              </div>
              @empty
              <div class="border-top">
                <p class="my-1 p-1">コメントはまだありません。</p>
              </div>
              @endforelse
            </div>
          {{-- ↓↓↓↓フォーム部品↓↓↓↓ --}}
          <div class="border-top border-info pt-3">
            <form action="" method="POST">
              @csrf
              <div class="form-froup">
              <label for="body" class="my-1">返信</label><small class="text-danger ml-2">{{$errors->first('body')}}</small>
                <textarea name="body" id="body" cols="30" rows="5" class="form-control">{{ old('body') }}</textarea>
              </div>
              <div>
                <input type="submit" name="submit" class="btn btn-outline-info py-0 mt-4 float-right d-block">
              </div>
            </form>
          </div>
          {{-- ↑↑↑↑フォーム部品↑↑↑↑ --}}
        </div>
        <a href="{{ url()->previous() }}" class="d-block mt-2">Back</a>
      </div>
    </div>
@endsection