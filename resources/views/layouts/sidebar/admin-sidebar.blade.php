<!-- Sidenav -->
<nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header d-flex align-items-center">
            <a class="navbar-brand" href="../../pages/dashboards/dashboard.html">
                <img src="{{ asset('assets/img/brand/blue.png') }}" class="navbar-brand-img" alt="...">
            </a>
            <div class="ml-auto">
                <!-- Sidenav toggler -->
                <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
                    <div class="sidenav-toggler-inner">
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Nav items -->
                <ul class="navbar-nav">

                    @if (auth()->user()->level == \App\Enums\UserLevel::ADMIN)
                        <li class="nav-item">
                            <a class="nav-link {{ Request::routeIs('dashboard') ? 'active' : '' }}"
                                href="{{ route('dashboard') }}">
                                <i class="ni ni-chart-bar-32"></i>
                                <span class="nav-link-text">Dashboard</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{ Request::routeIs('member') ? 'active' : '' }}"
                                href="{{ route('member') }}">
                                <i class="fa fa-users"></i>
                                <span class="nav-link-text">Member</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{ Request::routeIs('product.*') ? 'active' : '' }}"
                                href="#navbar-products" data-toggle="collapse" role="button" aria-expanded="true"
                                aria-controls="navbar-products">
                                <i class="ni ni-tag"></i>
                                <span class="nav-link-text">Produk</span>
                            </a>
                            <div class="collapse {{ Request::routeIs('product.*') ? 'show' : '' }}"
                                id="navbar-products">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{ route('product.lists') }}"
                                            class="nav-link {{ Request::routeIs('product.lists') ? 'active' : '' }}">Semua
                                            Produk</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('product.categories') }}"
                                            class="nav-link {{ Request::routeIs('product.categories') ? 'active' : '' }}">Kategori</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    @endif

                </ul>
                <!-- Divider -->
                <hr class="my-3">
                <!-- Heading -->
                <h6 class="navbar-heading p-0 text-muted">Transaksi</h6>
                <!-- Navigation -->
                <ul class="navbar-nav mb-md-3">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::routeIs('transaction.lists') ? 'active' : '' }}"
                            href="{{ route('transaction.lists') }}">
                            <i class="ni ni-cart"></i>
                            <span class="nav-link-text">Semua Transaksi</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                            href="https://demos.creative-tim.com/argon-dashboard/docs/foundation/colors.html"
                            target="_blank">
                            <i class="ni ni-spaceship"></i>
                            <span class="nav-link-text">Baru</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                            href="https://demos.creative-tim.com/argon-dashboard/docs/components/alerts.html"
                            target="_blank">
                            <i class="ni ni-delivery-fast"></i>
                            <span class="nav-link-text">Diproses</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                            href="https://demos.creative-tim.com/argon-dashboard/docs/plugins/charts.html"
                            target="_blank">
                            <i class="fa fa-ban"></i>
                            <span class="nav-link-text">Dibatalkan</span>
                        </a>
                    </li>
                </ul>
                <!-- Divider -->
                <hr class="my-3">
                <!-- Heading -->
                <h6 class="navbar-heading p-0 text-muted">Pembukuan</h6>
                <!-- Navigation -->
                <ul class="navbar-nav mb-md-3">
                    <li class="nav-item">
                        <a class="nav-link"
                            href="https://demos.creative-tim.com/argon-dashboard/docs/getting-started/overview.html"
                            target="_blank">
                            <i class="ni ni-calendar-grid-58"></i>
                            <span class="nav-link-text">Periodik</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                            href="https://demos.creative-tim.com/argon-dashboard/docs/foundation/colors.html"
                            target="_blank">
                            <i class="ni ni-chart-pie-35"></i>
                            <span class="nav-link-text">Kategori</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
