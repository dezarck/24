@extends('layouts.manage')

@section('content')
  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">Dashboard</h1>
      </div>
      <div class="column">
        {{-- <a href="{{route('users.create')}}" class="button is-primary pull-right m-r-20"><i class="fa fa-user-plus m-r-10"></i>Tambah User</a> --}}
      </div>
    </div>
    {{-- End Header columns --}}
    <hr>
    <div class="card">
      <div class="card-content">
          <div class="columns">
            <div class="column is-primary">
              <a href="#">Advertorial Berita</a>
            </div>
            <div class="column is-success">
              <a href="#">Advertorial Berita</a>
            </div>
            <div class="column is-info">
              <a href="#">Advertorial Berita</a>
            </div>
            <div class="column is-danger">
              <a href="#">Advertorial Berita</a>
            </div>
          </div>
      </div>
    </div>
  </div>
@endsection
