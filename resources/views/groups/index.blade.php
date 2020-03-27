{{-- @extends('layouts.myapp')
@section('title','ページタイトル')
@section('content')
<main>
  
      <div class="container col-md-6 my-4">
        <h1>読書会一覧</h1>


          <div class="card">

            <ul class="list-group list-group-flush">
              @foreach($groups as $group)
              <li class="list-group-item">
                  <a href="{{ route('group.show', ['id' => $group->id]) }}">{{ $group->name }}</a>
              </li>
              @endforeach
            </ul>
          </div>

        <div class="d-flex justify-content-center p-2">
          {{ $groups->links() }}
        </div>
        

      </div>
    </main>

@endsection --}}

@extends('layouts.myapp')
@section('title','読書会一覧')
@section('content')
  <div class="col-md-7 mx-auto">
    <h1 class="h3 font-weight-bold my-4 text-info">読書会</h1>

        <div class="row d-flex align-items-center">
          <div class="col-md-8">
            <div class="input-group m-0 mx-auto">
              <input type="text" class="form-control" placeholder="読書会を検索">
              <span class="input-group-append">
                <button type="button" class="btn btn-info"><i class="fas fa-search text-white"></i></button>
              </span>
            </div>
          </div>
          <div class="col-md-4 mt-2 mt-md-0">
            <button class="btn btn-outline-info container py-2 m-0">
              <a href="{{ route('group.new')}}" class="d-block"><span>新しい読書会を作る</span></a>
            </button> 
          </div>
        </div>

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