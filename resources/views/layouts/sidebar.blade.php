<!-- Sidebar -->
<ul class="navbar-nav bg-danger sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-utensils"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Santuy Caffe</div>
    </a>


    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Heading -->
    <div class="sidebar-heading text-white">
        {{ session()->get('level') }}
    </div>

    @if(session()->get('level') == 'kasir')
    <li class="nav-item">
        <a class="nav-link" href="{{ url('orderan') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Data Orderan</span></a>
    </li>
    @endif

    @if(session()->get('level') == 'admin')
    <li class="nav-item">
        <a class="nav-link" href="{{ url('users') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Data Pegawai</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ url('users') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Data Pengguna</span></a>
    </li>
    @endif

    @if(session()->get('level') == 'manager')
    <li class="nav-item">
        <a class="nav-link" href="{{ url('menu') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Data Menu</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ url('transaksi') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Transaksi</span></a>
    </li>
    @endif
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->