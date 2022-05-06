<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <div class="sb-sidenav-menu-heading">Administrator</div>
            <a class="nav-link {{ ($title == 'Dashboard') ? 'active' : '' }}" href="/dashboard">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Dashboard
            </a>
            <a class="nav-link {{ ($title == 'Data Tamu') ? 'active' : '' }}" href="/_tamu">
                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                Data Tamu
            </a>
            <a class="nav-link {{ ($title == 'Laporan') ? 'active' : '' }}" href="/report">
                <div class="sb-nav-link-icon"><i class="fas fa-file"></i></div>
                Laporan
            </a>
        </div>
    </div>
</nav>