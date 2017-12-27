@extends('layouts.manage')

@section('content')
  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">{{$role->display_name}}</h1>
        <h5 class="subtitle"><small><em>( {{$role->name}} )</em></small></h5>
        <p class="m-l-25">{{$role->description}}</p>

      </div>
      <div class="column">
        <a href="{{route('roles.edit', $role->id)}}" class="button is-primary is-pulled-right"><i class="fa fa-user-plus m-r-10"></i> Edit Role</a>
      </div>
    </div>
    <hr class="m-t-0">
    <div class="cloumns">
      <div class="column">
        <div class="box">
          <article class="media">
            <div class="media-content">
              <div class="content">
                <h2 class="title">Permission :</h2>
                  @foreach ($role->permissions as $r)
                      <li>{{$r->display_name}} <em class="m-l-10">[{{$r->description}}]</em></li>
                  @endforeach
              </div>
            </div>
          </article>
        </div>
      </div>
    </div>
  </div>
@endsection
