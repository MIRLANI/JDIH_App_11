
<header class="mt-0">
    <nav class="main-navbar"
        style="position: fixed; width: 100%; top: 0; z-index: 1000; background-color: rgb(135, 25, 25)">
        <div class="container">
            <div class="navbar-header" style="display: flex; align-items: center;">
                <a href="index.html" class="navbar-brand" style="flex-grow: 1;">
                    <img src="{{ asset('images/logo-mipa.png') }}" alt="Website Logo" style="height: 30px;">
                </a>
                <ul style="flex-grow: 2;">
                    <li class="menu-item mx-2">
                        <a href="{{ route("home") }}" class='menu-link'>
                            <span style="font-weight: bold;">Beranda</span>
                        </a>
                    </li>
                    <li class="menu-item mx-2">
                        <a href="{{ route("subjek") }}" class='menu-link'>
                            <span style="font-weight: bold;">Subjek</span>
                        </a>
                    </li>
                    <li class="menu-item mx-2">
                        <a href="{{ route("tahun") }}" class='menu-link'>
                            <span style="font-weight: bold;">Tahun</span>
                        </a>
                    </li>
                    <li class="menu-item mx-2 mx-auto">
                        <a href="{{ route("getLogin") }}" class='menu-link '>
                            <span style="font-weight: bold; margin-bottom: 2px"><i class="bi bi-box-arrow-in-right"
                                    style="font-size: 20px;"></i> Login</span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <div class="header-top">
        <div class="container">
            <div class="logo">
                <a href="index.html"><img src="assets/images/logo/logo.svg" alt="Logo"></a>
            </div>
            <div class="header-top-right">
                <!-- Burger button responsive -->
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </div>
        </div>
    </div>
</header>
