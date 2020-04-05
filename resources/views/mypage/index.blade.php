@extends('layouts.app')
@section('title','読書会一覧')
@section('content')
<nav aria-label="パンくずリスト" class="">
  <ol class="breadcrumb py-1 rounded-0">
    <li class="breadcrumb-item active" aria-current="page">読書会一覧</li>
  </ol>
</nav>
  <div class="col-md-9 mx-auto my-4">
    <h1 class="h3 font-weight-bold my-4 text-info">読書会</h1>
    {{-- 読書会検索エラーメッセージ --}}
    <small class="text-danger">{{ $errors->first('name') }}</small>
        {{-- 読書会検索フォーム --}}
        <div class="row d-flex align-items-center">
          <div class="col-lg-8">
              <form action="{{ url('/groups/search')}}" method="post"class="input-group m-0 mx-auto">
                @csrf
                {{method_field('get')}}
                <input name="name" type="text" class="form-control rounded-left" placeholder="読書会を検索">
                <span class="input-group-append">
                  <button type="submit" class="btn btn-info"><i class="fas fa-search text-white"></i></button>
                </span>
              </form>
          </div>
          {{-- 読書会新規作成 --}}
          <div class="col-lg-4 mt-2 mt-lg-0">
            <button class="w-100 btn btn-outline-info p-0">
              <a href="{{ route('group.new')}}" class="d-block text-info py-2" id="btn-new">&#043;&nbsp;New&nbsp;読書会</a>
            </button> 
          </div>
        </div>
    {{-- 読書会一覧 --}}
    <div class="card text-white bg-info mt-2">
      <div class="card-header">
        全ての読書会一覧
      </div>
      <ul class="list-group list-group-flush">
        @foreach($groups as $group)
        <li class="list-group-item">
            <a href="{{ route('group.show', ['id' => $group->id]) }}">{{ $group->name }}</a>
        </li>
        @endforeach
      </ul>
    </div>
    <div class="d-flex justify-content-center align-items-center p-2">
          {{ $groups->links() }}
    </div>

  </div>
@endsection