<header class="mt-0">
    <nav class="main-navbar" style=" width: 100%; top: 0; z-index: 1000; background-color: rgb(135, 25, 25)">
        <div class="container">
            <div class="navbar-header" style="display: flex; align-items: center;">
                <a href="{{ route('home') }}" class="navbar-brand" style="flex-grow: 1;">
                    <img src="{{ asset('images/logo-mipa.png') }}" alt="Website Logo" style="height: 30px;">
                </a>
                <ul style="flex-grow: 2;">
                    <li class="menu-item mx-2">
                        <a href="{{ route('home') }}" class='menu-link'>
                            <span style="font-weight: bold;">Beranda</span>
                        </a>
                    </li>
                    <li class="menu-item mx-2">
                        <a href="{{ route('subjek') }}" class='menu-link'>
                            <span style="font-weight: bold;">Subjek</span>
                        </a>
                    </li>
                    <li class="menu-item mx-2">
                        <a href="{{ route('tahun') }}" class='menu-link'>
                            <span style="font-weight: bold;">Tahun</span>
                        </a>
                    </li>
                    <li class="menu-item mx-2 mx-auto" style="@media (min-width: 1200px) { flex-grow: 1; }">
                        <a href="{{ route('getLogin') }}" class='menu-link '>
                            <span style="font-weight: bold; margin-bottom: 2px"><i class="bi bi-box-arrow-in-right"
                                    style="font-size: 20px;"></i> Login</span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- Burger button responsive -->
    <a href="#" class="burger-btn d-block d-xl-none p-2">
        <i class="bi bi-justify fs-3"></i>
    </a>
</header>
