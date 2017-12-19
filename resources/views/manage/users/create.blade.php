@extends('layouts.manage')

@section('content')
  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">Tambah User Baru</h1>
      </div>
    </div>
    <hr class="m-t-0">

    <div class="columns">
      <div class="column">
        <form action="{{route('users.store')}}" method="POST">
          {{csrf_field()}}
          <div class="field">
            <label for="name" class="label">Nama User</label>
            <p class="control">
              <input type="text" class="input" name="name" id="name">
            </p>
          </div>

          <div class="field">
            <label for="email" class="label">Email:</label>
            <p class="control">
              <input type="text" class="input" name="email" id="email">
            </p>
          </div>

          <div class="field">
            <label for="password" class="label">Password</label>
            <p class="control">
              <input type="text" class="input" name="password" id="password" v-if="!auto_password">
              <b-checkbox name="auto_generate" class="m-t-15" v-model="auto_password">Generate Password</b-checkbox>
            </p>
          </div>
          <hr class="m-t-0">
          <button class="pull-right button is-success"><i class="fa fa-plus m-r-10"></i>Tambah</button>
        </form>
      </div>
    </div>

  </div> <!-- ujung .flex-container -->
@endsection

@section('scripts')
  <script>
    var app = new Vue({
      el: '#app',
      data: {
        auto_password: true
      }
    });
  </script>
@endsection
