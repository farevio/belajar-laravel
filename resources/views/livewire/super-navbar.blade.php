<body>
    
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <br>
            <br>
            <br>
            <ul class="list-unstyled components">
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-image"></i>
                        Produk
                    </a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="{{ route('product-add') }}">Tambah</a>
                        </li>
                        <li>
                            <a href="{{ route('all-products') }}">Semua</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('products-log') }}">
                        <i class="fas fa-image"></i>
                        Jejak
                    </a>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-image"></i>
                        Stat
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="{{ route('store-stat') }}">Toko</a>
                        </li>
                        <li>
                            <a href="{{ route('buyer-stat') }}">Pembeli</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('complaint') }}">
                        <i class="fas fa-image"></i>
                        Keluhan
                    </a>
                </li>
                <li>
                    <a href="{{ route('products-review') }}">
                        <i class="fas fa-image"></i>
                        Ulasan
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin') }}">
                        <i class="fas fa-image"></i>
                        Admin
                    </a>
                </li>
                <br>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">
        <div>
        <nav class="navbar navbar-expand-md navbar-light bg-white fixed-top">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Mang<strong>Roopa</strong>
                </a>
                <button type="button" id="sidebarCollapse" class="btn btn-outline-dark">
                    <i class="fas fa-align-left"></i>
                    <span>Sidebar</span>
                </button>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">{{ __('Home') }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</body>
