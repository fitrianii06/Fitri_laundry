<ul class="navbar-nav">
   
    <li class="nav-item ">
      <a class="nav-link {{ Request::is('/') ? 'active' : '' }} " href="/home">
        <i class="ni ni-archive-2"></i> Dashboard
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link {{ Request::is('outlet') ? 'active' : '' }} " href="/outlet">
        <i class="ni ni-shop "></i> Outlet
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link {{ Request::is('paket') ? 'active' : '' }} " href="/paket">
        <i class="ni ni-folder-17"></i> Paket
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link {{ Request::is('member') ? 'active' : '' }} " href="/member">
        <i class="ni ni-single-02"></i> Member
      </a>
    </li>
  
  </ul>