@extends('layouts.app')

@section('title','新規読書会作成')
@section('content')
<nav aria-label="パンくずリスト">
  <ol class="breadcrumb py-1 rounded-0">
    <li class="breadcrumb-item"><a href="{{ url('/') }}">読書会一覧</a></li>
    <li class="breadcrumb-item active" aria-current="page">新規作成</li>
  </ol>
</nav>
  {{-- ↓↓↓↓フォーム部品↓↓↓↓ --}}
  <div class="col-md-9 mx-auto border my-4 overflow-hidden rounded p-4">
    <h1 class="h3 text-center text-info mb-2 font-weight-bold">読書会新規作成</h1>
    <form action="" method="POST">
      @csrf
      <div class="form-group m-0">
        <label for="g_name" class="my-1">会の名前<small class="text-danger">{{ $errors->first('g_name') }}</small></label>
      <input name="g_name" id="g_name" cols="30" rows="5" class="form-control" value="{{ old('g_name')}}">
        <label for="description" class="my-1">概要<small class="text-muted">（会を作った経緯・やりたいこと・発言ルール・運営方針など）</small><small class="text-danger">{{ $errors->first('description') }}</small></label>
      <textarea name="description" id="description" cols="30" rows="5" class="form-control">{{ old('description') }}</textarea>
      </div>
      <div>
        <input type="submit" name="submit" class="btn btn-outline-info py-0 mt-2 float-right d-block" id="btn-new" value="送信">
      </div>
    </form>
  </div>
  {{-- ↑↑↑↑フォーム部品↑↑↑↑ --}}
  <div class="col-sm-9 mx-auto my-4 p-0">
    <a href="{{ url('/') }}" class="mt-2">Back</a>
  </div>
  
@endsection