<nav class="sidebar  sidebar-offcanvas " id="sidebar" >
  <ul class="nav ">
    <li class="nav-item nav-profile">
      <div class="nav-link">
        <div class="profile-image"> <img src="images/faces/face4.jpg" alt="image"/> <span class="online-status online"></span> </div>
        <div class="profile-name">
          <p class="name">{{ Auth::user()->name }}</p>
          <p class="designation">Manager</p>
          <div class="badge badge-teal mx-auto mt-3">Online</div>

        </div>
      </div>
    </li>
    <li class="nav-item"><a class="nav-link" href="{{ route('admin.home') }}"><span class="menu-title">Inicio</span><i class="col-3 fas fa-home float-left"></i></a></li>
    <li class="nav-item">
      <a class="nav-link dropdown-toggle" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages"> <span class="menu-title">Modulo de usuarios</span></i></a>
      <div class="collapse" id="general-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ route('admin.users.index') }}"> <span class="menu-title">Usuario </span> <i class="col-3 fas fa-user"></i></a></li>
        </ul>
      </div>
    </li>
    
    <li class="nav-item purchase-button">
      <a class="nav-link" href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">
          Salir
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          {{ csrf_field() }}
      </form>
       
    </li>
  </ul>
</nav>