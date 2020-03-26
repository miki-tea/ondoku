<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ONDOKU</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/1010468d87.js" crossorigin="anonymous"></script>
  </head>
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">ONDOKU</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="#">Features</a>
      <a class="nav-item nav-link" href="#">Pricing</a>
      <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
    </div>
  </div>

</nav>
  </header>
  <main>
    <div class="container mt-4">
      <div class="row">
        <div class="col">
          <div class="card mb-4">
            <div class="card-header">
              <span>読書会<span><h1 class="ml-2 mb-0 h3">{{ $group->name }}</h1>
            </div>
            <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <p>
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
                <label for="title" class="my-1">タイトル</label>
                <input type="text" class="form-control" id="title" name="title">
              </div>
              <div class="form-froup">
                <label for="body" class="my-1">返信</label>
                <textarea name="body" id="body" cols="30" rows="5" class="form-control"></textarea>
              </div>
              <div>
                <input type="submit" class="btn btn-outline-secondary py-0 mt-2 float-right d-block">
              </div>
            </form>
          </div>
          <nav class="card mb-4">
            <div class="card-header">
              議題 一覧
            </div>
            <div class="border-top my-0">
          </div>
            <ul class="list-group list-group-flush">
              @foreach($agendas as $agenda)
            <li class="list-group-item">
                  <a href="{{ route('agenda.index', ['id' => $agenda->id]) }}" class="">{{ $agenda->title }}</a>
                </li>
              @endforeach
            </ul>

          </nav>
        </div>
        <div class="">
          {{-- ここに読書会議題が表示される --}}
        </div>
      </div>
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>