<div class="side-menu" id="admin-side-menu">
  <aside class="menu m-t-20">
    <p class="menu-label p-l-10">
      hai, {{ Auth::user()->name }}
    </p>
    <ul class="menu-list">
      <li><a href="{{Route('manage.dashboard')}}" class="{{Nav::isRoute('manage.dashboard')}}">Dashboard</a></li>
    </ul>
    <p class="menu-label p-l-10">
      User
    </p>
    <ul class="menu-list">
      <li><a href="{{route('users.index')}}" class="{{Nav::isResource('users')}}">Manage User</a></li>
      <li><a class="has-submenu {{Nav::hasSegment(['roles', 'permissions'], 2)}}">Role &amp; Permission</a>
          <ul class="submenu">
            <li><a href="{{route('permissions.index')}}" class="{{Nav::isResource('permissions')}}">Permission</a></li>
            <li><a href="{{route('roles.index')}}" class="{{Nav::isResource('roles')}}">Roles</a></li>
          </ul>
      </li>
    </ul>
  </aside>
</div>
