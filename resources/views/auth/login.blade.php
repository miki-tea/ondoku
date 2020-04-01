@extends('layouts.app')

@section('content')
<div class="container my-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-white bg-info">{{ __('ログイン') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Eメール') }}</label>

                            <div class="col-md-6">
                                <input id="js-email email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('パスワード') }}</label>

                            <div class="col-md-6">
                                <input id="js-pass password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('次回ログインを省略') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('ログイン') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="float-right btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('パスワードを忘れた方はこちら') }}
                                    </a>
                                    {{-- <div id="js-easyLoginBtn" class="float-right btn btn-link">
                                        {{ __('会員登録せずに試したい方はこちら') }}
                                    </div> --}}
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- モーダル内容 --}}
<div class="modal js-modal">
  <div class="modal__bg js-modalClose"></div>
  <div class="modal__content">
    <h1 class="modal__title">お試しログインについて</h1>
    <p>
      お試しログインは、このアプリを試用するためのアカウントです。どなたでもログイン・閲覧できるため、個人情報に関わるもの、公序良俗に反するもの等はメモに登録しないで下さい。
    </p>
    <button class="js-modalClose btn__accept" href="">OK</button>
  </div>
</div>
<script src="{{ asset('/js/myapp.js') }}"></script>
@endsection
