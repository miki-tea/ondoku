@extends('layouts.myapp')
@section('title','検索結果')
@section('content')
  <div class="col-md-7 mx-auto">
    @if(!empty($message))
      <div class="alert alert-info mt-4" role="alert">{{ $message}}</div>
    @endif
    <div class="card text-white bg-info mt-2">
      <div class="card-header">
        該当件数：{{ $count }}件
      </div>
      <ul class="list-group list-group-flush">
        @if(isset($groups))
          @foreach($groups as $group)
            <li class="list-group-item">
                <a href="{{ route('group.show', ['id' => $group->id]) }}">{{ $group->name }}</a>
            </li>
          @endforeach
        @endif
      </ul>
    </div>
    <a href="{{ url('/groups') }}" class="d-block mt-2">Back</a>
    <div class="d-flex justify-content-center align-items-center p-2">
      {{ $groups->appends(request()->input())->links() }}
    </div>


  </div>
@endsection