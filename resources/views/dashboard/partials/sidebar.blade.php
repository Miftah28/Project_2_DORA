<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link {{ request()->is('dashboard') ? 'active' : 'collapsed' }}" href="dashboard">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link {{ request()->is('kegiatan','datadonor' ) ? 'active' : 'collapsed' }}    " data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class='bx bxs-donate-blood' ></i><span>Donor Darah</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a class="nav-link {{ request()->is('kegiatan' ) ? 'active' : 'collapsed' }} " href="{{url('kegiatan')}}">
                        <i class="bi bi-circle"></i><span>Kegitaan</span>
                    </a>
                </li>
                <li>
                    <a class="nav-link {{ request()->is('datadonor' ) ? 'active' : 'collapsed' }}" href="{{url('datadonor')}}">
                        <i class="bi bi-circle"></i><span>Data Donor</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Donor Darah Nav -->

        <li class="nav-item">
            <a class="nav-link {{ request()->is('stokdarah') ? 'active' : 'collapsed' }}" href="{{url('stokdarah')}}">
                <i class='bx bxs-droplet' ></i>
                <span>Stok Darah</span>
            </a>
        </li><!-- End Stok Darah Nav -->

        <li class="nav-item">
            <a class="nav-link {{ request()->is('masyarakat') ? 'active' : 'collapsed' }}" href="masyarakat">
                <i class='bx bx-user-plus'></i>
                <span>Masyarakat</span>
            </a>
        </li><!-- End Masyarakat Nav -->
        
        <li class="nav-item">
            <a class="nav-link {{ request()->is('transaksi') ? 'active' : 'collapsed' }}" href="transaksi">
                <i class='bx bxs-wallet'></i>
                <span>Transaksi</span>
            </a>
        </li><!-- End Transaksi Nav -->

        <li class="nav-item">
            <a class="nav-link {{ request()->is('laporan') ? 'active' : 'collapsed' }}" href="laporan">
                <i class='bx bxs-file-blank'></i>
                <span>Laporan</span>
            </a>
        </li><!-- End Transaksi Nav -->

    </ul>

</aside><!-- End Sidebar-->
