@extends('layouts.manage')

@section('content')
  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">Edit User</h1>
      </div>
    </div>
    <hr class="m-t-0">

    <div class="columns">
      <div class="column">
        <form action="{{route('users.update', $user->id)}}" method="POST">
          {{method_field('PUT')}}
          {{csrf_field()}}
          <div class="field">
            <label for="name" class="label">Nama :</label>
            <p class="control">
              <input type="text" class="input" name="name" id="name" value="{{$user->name}}">
            </p>
          </div>

          <div class="field">
            <label for="email" class="label">Email:</label>
            <p class="control">
              <input type="text" class="input" name="email" id="email" value="{{$user->email}}">
            </p>
          </div>

          <div class="field">
            <label for="password" class="label">Password</label>
            {{-- <b-radio-group v-model="password_options"> --}}
            <div class="block">
              <div class="field">
                  <b-radio name="password_options" v-model="password_options" native-value="keep"> Jangan Ganti Password</b-radio>
                </div>
                <div class="field">
                  <b-radio name="password_options" v-model="password_options" native-value="auto"> Auto-Generate Password Baru</b-radio>
                </div>
                <div class="field">
                  <b-radio name="password_options" v-model="password_options" native-value="manual"> Ganti Password Secara Manual</b-radio>
                  <p class="control m-t-15">
                    <input type="password" class="input" name="password" id="password" v-if="password_options == 'manual'" placeholder="Tambahkan Manual Password Baru Anda.">
                  </p>
                </div>
            </div>
          </div>
          <hr class="m-t-0">
          <button class="button is-primary pull-right">Edit User</button>
        </form>
      </div>
    </div>

  </div> <!-- end of .flex-container -->
@endsection


@section('scripts')
  <script>
    var app = new Vue({
      el: '#app',
      data: {
        auto_password: true,
        password_options: 'keep'
      }
    });
  </script>
@endsection
