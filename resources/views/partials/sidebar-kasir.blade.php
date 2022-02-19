<ul class="navbar-nav">
    <li class="nav-item ">
      <a class="nav-link {{ Request::is('/') ? 'active' : '' }} " href="/home">
        <i class="ni ni-archive-2"></i> Home Kasir
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link {{ Request::is('transaksi') ? 'active' : '' }} " href="/transaksi">
        <i class="ni ni-cart"></i> Transaksi
      </a>
    </li>
    <li class="nav-item ">
        <a class="nav-link {{ Request::is('/') ? 'active' : '' }} " href="/home">
          <i class="ni ni-chart-bar-32"></i> Laporan
        </a>
      </li>
    <li class="nav-item ">
      <a class="nav-link {{ Request::is('member') ? 'active' : '' }} " href="/member">
        <i class="ni ni-single-02"></i> Member
      </a>
    </li>
  
  </ul>