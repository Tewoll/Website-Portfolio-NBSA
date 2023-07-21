<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/belakang" class="brand-link">
        <img src="{{url("dist/img/NBSA-Logo.png")}}" alt="NBSA Logo" class="brand-image elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">NBSA News</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-collapse-hide-child nav-legacy text-sm" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item menu-open">
                <br>
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>
                            Portal News
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('kategori.index') }}" class="nav-link">
                                <i class="fas fa-arrow-right nav-icon"></i>
                                <p>Kategori</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('tag.index') }}" class="nav-link">
                                <i class="fas fa-arrow-right nav-icon"></i>
                                <p>Tag</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('artikel.index') }}" class="nav-link">
                                <i class="fas fa-arrow-right nav-icon"></i>
                                <p>Artikel</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item menu-open">
                <br>
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-briefcase"></i>
                        <p>
                            Portfolio Reference
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('kategori-portfolio.index') }}" class="nav-link">
                                <i class="fas fa-tasks nav-icon"></i>
                                <p>Kategori</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('portfolio.index') }}" class="nav-link">
                                <i class="fas fa-image nav-icon"></i>
                                <p>Portfolio</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-photo-video nav-icon"></i>
                                <p>Galery</p>
                            </a>
                        </li>

                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>