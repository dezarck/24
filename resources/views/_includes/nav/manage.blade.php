<div class="side-menu">
  <aside class="menu m-t-20">
    <p class="menu-label p-l-10">
      hai, {{ Auth::user()->name }}
    </p>
    <ul class="menu-list">
      <li><a href="{{Route('manage.dashboard')}}">Dashboard</a></li>
    </ul>
    <p class="menu-label p-l-10">
      User
    </p>
    <ul class="menu-list">
      <li><a href="{{route('users.index')}}">Manage User</a></li>
      <li><a href="#">Pengaturan User</a></li>
    </ul>
  </aside>
</div>
