<div>
    <!-- Sidebar outter -->
    <div class="main-sidebar sidebar-style-2">
        <!-- sidebar wrapper -->
        <aside id="sidebar-wrapper">
            <!-- sidebar brand -->
            <div class="sidebar-brand">
                {{-- <a href="{{ route('welcome') }}">{{ config('app.name', 'Laravel') }}</a> --}}
            </div>
            <!-- sidebar menu -->
            <ul class="sidebar-menu">
                <!-- menu header -->
                <li class="menu-header">General</li>
                <!-- menu item -->
                <li class="{{ Route::is('dashboard') ? 'active' : '' }}">
                    <a href="{{ route('dashboard') }}">
                        <i class="fas fa-fire"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="dropdown {{ Route::is('master') ? 'active' : '' }}">
                    <a class="nav-link has-dropdown" href="#" data-toggle="dropdown">
                        <i class="fas fa-th"></i>
                        <span>Master Data</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('master.user.index') }}" class="nav-link">User</a></li>
                        <li><a href="" class="nav-link">Data PLTS</a></li>
                        <li><a href="" class="nav-link">Material</a></li>
                        <li><a href="" class="nav-link">Keuntungan dan Manfaat</a></li>
                        <li><a href="" class="nav-link">Informasi dan Edukasi</a></li>
                        <li><a href="" class="nav-link">FAQ</a></li>
                    </ul>
                </li>
            </ul>
        </aside>
    </div>
</div>
