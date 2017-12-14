<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Online24jam | Always Be First</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
      <div class="columns">
        <div class="column is-one-third is-offset-one-third m-t-75">
          <div class="card">
            <div class="card-content">
              <form action="{{route('register')}}" method="POST" role="form">
                  {{csrf_field()}}
                  <div class="field">
                    <label for="name" class="label">Nama</label>
                    <p class="control">
                      <input class="input {{ $errors->has('name') ? 'is-danger' : '' }}" type="text" name="name" id="name" placeholder="Nama Anda" value="{{old('name')}}" required>
                    </p>
                    @if ($errors->has('name'))
                      <p class="help is-danger">{{ $errors->first('name') }}</p>
                    @endif
                  </div>

                  <div class="field">
                    <label for="username" class="label">Username</label>
                    <p class="control">
                      <input class="input {{ $errors->has('username') ? 'is-danger' : '' }}" type="text" name="username" id="name" placeholder="username" value="{{old('username')}}" required>
                    </p>
                    @if ($errors->has('username'))
                      <p class="help is-danger">{{ $errors->first('username') }}</p>
                    @endif
                  </div>

                  <div class="field">
                    <label for="email" class="label">Email</label>
                    <p class="control">
                      <input class="input {{ $errors->has('email') ? 'is-danger' : '' }}" type="text" name="email" id="email" placeholder="email@anda.com" value="{{old('email')}}" required>
                    </p>
                    @if ($errors->has('email'))
                      <p class="help is-danger">{{ $errors->first('email') }}</p>
                    @endif
                  </div>
                  <div class="columns">
                    <div class="column">
                      <div class="field">
                        <label for="password" class="label">Password</label>
                        <p class="control">
                          <input class="input {{ $errors->has('password') ? 'is-danger' : '' }}" type="password" name="password" id="password" required>
                        </p>
                        @if ($errors->has('password'))
                          <p class="help is-danger">{{ $errors->first('password') }}</p>
                        @endif
                      </div>
                    </div>
                    <div class="column">
                      <div class="field">
                        <label for="password_confirmation" class="label">Confirm Password</label>
                        <p class="control">
                          <input class="input {{ $errors->has('password_confirmation') ? 'is-danger' : '' }}" type="password_confirmation" name="password_confirmation" id="password_confirmation" required>
                        </p>
                        @if ($errors->has('password_confirmation'))
                          <p class="help is-danger">{{ $errors->first('password_confirmation') }}</p>
                        @endif
                      </div>
                    </div>
                  </div>

                  <button class="button is-primary is-outlined m-t-30 is-fullwidth">Daftar</button>
              </form>
            </div> <!-- ujung card content -->
          </div><!-- ujung card -->
          <h6 class="has-text-centered m-t-20"><a href="{{route('login')}}" class="is-muted">Sudah punya akun ?</a></h6>
        </div>
      </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
