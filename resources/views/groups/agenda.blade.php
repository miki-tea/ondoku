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
    <div class="co-md-12 my-4">
      <div class="col-md-8 mx-auto">
        <div class="border rounded p-4 overflow-hidden">
          <div class="mb-4">
            <h1 class="h5 mb-4">{{ $agenda->title}}</h1>
            <p>{{ $agenda->body}}</p>
            <div class="text-right">
              <small>投稿日：{{ $agenda->updated_at->format('Y年m月d日')}}</small>
            </div>
          </div>
          <div>
            @forelse($agenda->comments as $comment)
              <div class="border-top">
                <p class="my-1 p-1">{{ $comment->body }}</p>
                <div class="text-right">
                  <small class="text-muted">投稿日：{{ $comment->created_at->format('Y年m月d日') }}</small>
                </div>
              </div>
              @empty
              <div class="border-top">
                <p class="my-1 p-1">コメントはまだありません。</p>
              </div>
              @endforelse
            </div>
          {{-- フォーム部品 --}}
          <div class="border-top my-0">
            <form action="" method="POST">
              @csrf
              <div class="form-froup">
                <label for="body" class="my-1">返信</label>
                <textarea name="body" id="body" cols="30" rows="5" class="form-control"></textarea>
              </div>
              <div>
                <input type="submit" name="submit" class="btn btn-outline-secondary py-0 mt-2 float-right d-block">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>