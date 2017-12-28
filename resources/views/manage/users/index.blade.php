@extends('layouts.manage')

@section('content')
  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">Manajemen User</h1>
      </div>
      <div class="column">
        <a href="{{route('users.create')}}" class="button is-primary pull-right m-r-20"><i class="fa fa-user-plus m-r-10"></i>Tambah User</a>
      </div>
    </div>
    {{-- End Header columns --}}
    <hr>
    <div class="card">
      <div class="card-content">
        <table class="table is-narrow is-striped is-fullwidth">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nama</th>
              <th>Email</th>
              <th>Tanggal Pembuatan</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($users as $user)
              <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->created_at->toFormattedDateString()}}</td>
                <td class="has-text-right">
                  <a href="{{route('users.edit', $user->id)}}" class="button is-outlined m-r-5">Edit</a>
                  <a href="{{route('users.show', $user->id)}}" class="button is-outlined">View</a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    {{$users->links()}}
  </div>
@endsection
