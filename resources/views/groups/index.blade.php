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
    <div class="col-3 input-group">
	<input type="text" class="form-control" placeholder="読書会を検索">
	<span class="input-group-append">
		<button type="button" class="btn btn-info"><i class="fas fa-search text-white"></i></button>
	</span>
</div>
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
          <nav class="card">
            <div class="card-header">
              読書会 一覧
            </div>
            <ul class="list-group list-group-flush">
              {{-- <li class="list-group-item bg-info"><a href="#" class="text-white">
                読書会を追加する
              </a></li> --}}
              @foreach($groups as $group)
            <li class="list-group-item {{ $selected_group_id === $group->id ? 'bg-info' : ''}}">
                  <a href="{{ route('agendas.index', ['id' => $group->id]) }}" class="{{ $selected_group_id === $group->id ? 'text-white' : 'text-dark'}}">{{ $group->name }}</a>
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