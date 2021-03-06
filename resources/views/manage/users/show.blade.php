@extends('layouts.manage')

@section('content')
  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">Data User</h1>
      </div> <!-- end of column -->

      <div class="column">
        <a href="{{route('users.edit', $user->id)}}" class="button is-primary is-pulled-right"><i class="fa fa-user m-r-10"></i> Edit User</a>
      </div>
    </div>
    <hr class="m-t-0">

    <div class="columns">
      <div class="column">
        <div class="field">
          <label for="name" class="label">Nama</label>
          <pre>{{$user->name}}</pre>
        </div>

        <div class="field">
          <div class="field">
            <label for="email" class="label">Email</label>
            <pre>{{$user->email}}</pre>
          </div>
        </div>

        <div class="field">
          <div class="field">
            <label for="email" class="label">Role</label>
            {{$user->roles->count() == 0 ? 'User Belum Memiliki Role' : ''}}
            <ul>
              @foreach ($user->roles as $role)
                <li>{{$role->display_name}} ({{$role->description}})</li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
