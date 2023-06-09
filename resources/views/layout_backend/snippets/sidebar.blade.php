<!-- Sidebar Start -->
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
        <a href="/beranda" class="text-nowrap logo-img">
            <img src="{{ asset('modernize/assets/images/logos/dark-logo.svg')}}" width="180" alt="" />
        </a>
        <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
        </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
        <ul id="sidebarnav">
            <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
            <a class="sidebar-link" href="/beranda" aria-expanded="false">
                <span>
                <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Beranda</span>
            </a>
            </li>
            <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Data Master</span>
            </li>
            <li class="sidebar-item">
            <a class="sidebar-link" href="{{route('pasien.index')}}" aria-expanded="false">
                <span>
                <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Pasien</span>
            </a>
            </li>
            <li class="sidebar-item">
            <a class="sidebar-link" href="{{route('penyakit.index')}}" aria-expanded="false">
                <span>
                <i class="ti ti-alert-circle"></i>
                </span>
                <span class="hide-menu">Penyakit</span>
            </a>
            </li>
            <li class="sidebar-item">
            <a class="sidebar-link" href="{{route('gejala.index')}}" aria-expanded="false">
                <span>
                <i class="ti ti-cards"></i>
                </span>
                <span class="hide-menu">Gejala</span>
            </a>
            </li>
            <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Data Kaidah Produksi</span>
            </li>
            <li class="sidebar-item">
            <a class="sidebar-link" href="./icon-tabler.html" aria-expanded="false">
                <span>
                <i class="ti ti-mood-happy"></i>
                </span>
                <span class="hide-menu">Kaidah Produksi DS</span>
            </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="./icon-tabler.html" aria-expanded="false">
                <span>
                    <i class="ti ti-mood-happy"></i>
                </span>
                <span class="hide-menu">Kaidah Produksi CF</span>
                </a>
            </li>
            <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">Data Hasil Diagnosa</span>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="./icon-tabler.html" aria-expanded="false">
                <span>
                    <i class="ti ti-mood-happy"></i>
                </span>
                <span class="hide-menu">Hasil Diagnosa DS</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="./sample-page.html" aria-expanded="false">
                    <span>
                    <i class="ti ti-aperture"></i>
                    </span>
                    <span class="hide-menu">Hasil Diagnosa CF</span>
                </a>
            </li>
        </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!--  Sidebar End -->