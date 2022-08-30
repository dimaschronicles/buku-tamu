<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
    id="layout-navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="/dashboard"><strong>Buku Tamu</strong></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-ex-2"
            aria-controls="navbar-ex-2" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-ex-2">
            <div class="navbar-nav me-auto">
                <a class="nav-item nav-link {{ $title == 'Dashboard' ? 'active' : '' }}" href="/dashboard">Home</a>
                <a class="nav-item nav-link {{ $title == 'Rekapitulasi' ? 'active' : '' }}"
                    href="/report">Rekapitulasi</a>
            </div>

            <div class="btn-group">
                <button type="button" class="btn btn-light dropdown-toggle hide-arrow" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="bx bxs-user-circle"></i>
                    {{ auth()->user()->name }}
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/profile">Profil</a></li>
                    <li><a class="dropdown-item" href="/profile/changepassword">Ganti Password</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li>
                        <form action="/logout" method="POST">
                            @csrf
                            <button class="dropdown-item" type="submit">
                                <i class="bx bx-power-off me-2"></i>
                                <span class="align-middle">Log Out</span>
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
