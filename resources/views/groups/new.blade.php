@extends('layouts.mypage')

@section('title','新規読書会作成')
@section('content')
  {{-- ↓↓↓↓フォーム部品↓↓↓↓ --}}
  <div class="col-sm-9 border mx-auto my-4 overflow-hidden rounded p-4">
    <h1 class="h3 text-center text-info mb-2">読書会新規作成</h1>
    <form action="" method="POST">
      @csrf
      <div class="form-group m-0">
        <label for="name" class="my-1">グループ名</label>
        <input name="name" id="name" cols="30" rows="5" class="form-control"></textarea>
        <label for="description" class="my-1">概要</label>
        <textarea name="description" id="description" cols="30" rows="5" class="form-control"></textarea>
      </div>
      <div>
        <input type="submit" name="submit" class="btn btn-outline-info py-0 mt-2 float-right d-block" value="送信">
      </div>
    </form>
  </div>
  {{-- ↑↑↑↑フォーム部品↑↑↑↑ --}}
@endsection