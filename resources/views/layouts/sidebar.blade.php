<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ route('dashboard.admin') }}" class="brand-link">
        <img src="{{ asset('img/logo.png') }}" alt="Logo Desa Sukamaju" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Desa Sukamaju</span>
    </a>

    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ auth()->user()->name }}</a>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-header">Admin</li>
                <li class="nav-item">
                    <a href="{{ route('dashboard.admin') }}" class="nav-link @if(request()->is('admin/dashboard*')) active @endif">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-university"></i>
                        <p>
                            Profile Desa
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.desa.index') }}" class="nav-link @if(request()->is('admin/admin-desa*')) active @endif">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Admin Desa
                        </p>
                    </a>
                </li>
                <li class="nav-header">Layanan</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-envelope"></i>
                        <p>
                            Pengajuan Surat
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Antrian Pelayanan
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-flag"></i>
                        <p>
                            Aduan Masyarakat
                        </p>
                    </a>
                </li>
                <li class="nav-header">Logout</li>
                <li class="nav-item">
                    <form action=" {{ route('logout') }} " method="POST">
                        @csrf
                        <button type="submit" class="nav-link btn btn-danger" style="color: white">
                            <i class="nav-icon fas fa-sign-out-alt"></i>
                            <p>
                                Keluar
                            </p>
                        </button>
                    </form>
                </li>
            </ul>
        </nav>
    </div>
</aside>
