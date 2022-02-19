<ul class="navbar-nav">
   
    <li class="nav-item ">
      <a class="nav-link {{ Request::is('/') ? 'active' : '' }} " href="/home">
        <i class="ni ni-archive-2"></i> Home Admin
      </a>
    </li>
     <li class="nav-item ">
      <a class="nav-link {{ Request::is('user') ? 'active' : '' }} " href="/user">
        <i class="ni ni-single-02"></i> user
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link {{ Request::is('outlet') ? 'active' : '' }} " href="/outlet">
        <i class="ni ni-building "></i> Outlet
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link {{ Request::is('paket') ? 'active' : '' }} " href="/paket">
        <i class="ni ni-folder-17"></i> Paket
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link {{ Request::is('member') ? 'active' : '' }} " href="/member">
        <i class="ni ni-badge"></i> Member
      </a>
    </li> 
   
    <li class="nav-item ">
      <a class="nav-link {{ Request::is('transaksi') ? 'active' : '' }} " href="/transaksi">
        <i class="ni ni-cart"></i> Transaksi
      </a>
    </li>
    
  </ul>