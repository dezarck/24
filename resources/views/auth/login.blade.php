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
              <form action="{{route('login')}}" method="POST" role="form">
                  {{csrf_field()}}
                  <div class="field">
                    <label for="email" class="label">Email</label>
                    <p class="control">
                      <input class="input {{ $errors->has('email') ? 'is-danger' : '' }}" type="text" name="email" id="email" placeholder="name@example.com" value="{{old('email')}}">
                    </p>
                    @if ($errors->has('email'))
                      <p class="help is-danger">{{ $errors->first('email') }}</p>
                    @endif
                  </div>
                  <div class="field">
                    <label for="password" class="label">Password</label>
                    <p class="control">
                      <input class="input {{ $errors->has('password') ? 'is-danger' : '' }}" type="password" name="password" id="password">
                    </p>
                    @if ($errors->has('password'))
                      <p class="help is-danger">{{ $errors->first('password') }}</p>
                    @endif
                  </div>
                  <b-checkbox name="remember" class="m-t-20">Remember Me</b-checkbox>
                  <button class="button is-primary is-outlined m-t-30 is-fullwidth">Log in</button>
              </form>
            </div> <!-- ujung card content -->
          </div><!-- ujung card -->
          <h6 class="has-text-centered m-t-20"><a href="{{route('password.request')}}" class="is-muted">Lupa Password ?</a></h6>
        </div>
      </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
