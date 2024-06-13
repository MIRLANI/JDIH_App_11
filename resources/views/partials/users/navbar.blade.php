<header class="mt-0">
    <nav class="main-navbar" style="position: fixed; width: 100%; top: 0; z-index: 1000; background-color: rgb(135, 25, 25)">
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
                            <span style="font-weight: bold;">Jenis</span>
                        </a>
                    </li>
                    <li class="menu-item mx-2">
                        <a href="{{ route('sumber') }}" class='menu-link'>
                            <span style="font-weight: bold;">Sumber</span>
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
</header>



<div class="offcanvas offcanvas-end d-md-none" tabindex="-1" id="navbarOffcanvas" aria-labelledby="navbarOffcanvasLabel">
    <div class="offcanvas-header" style="padding: 10px;">
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close" style="padding: 5px; font-size: 18px;"></button>
    </div>
    <div class="offcanvas-body" style="padding: 20px; background-color: transparent;">
        <ul style="list-style: none; padding: 0; margin: 0;">
            <li style="margin-bottom: 10px;" class="m-3">
                <a href="{{ route('home') }}" class='menu-link' style="text-decoration: none; color: #333; font-weight: bold;">
                    <span style="font-weight: bold;">Beranda</span>
                </a>
            </li>
            <li style="margin-bottom: 10px;" class="m-3">
                <a href="{{ route('subjek') }}" class='menu-link' style="text-decoration: none; color: #333; font-weight: bold;">
                    <span style="font-weight: bold;">Jenis</span>
                </a>
            </li>
            <li style="margin-bottom: 10px;" class="m-3">
                <a href="{{ route('sumber') }}" class='menu-link' style="text-decoration: none; color: #333; font-weight: bold;">
                    <span style="font-weight: bold;">Sumber</span>
                </a>
            </li>
            <li style="margin-bottom: 10px;" class="m-3">
                <a href="{{ route('tahun') }}" class='menu-link' style="text-decoration: none; color: #333; font-weight: bold;">
                    <span style="font-weight: bold;">Tahun</span>
                </a>
            </li>
            <li style="margin-bottom: 10px;" class="m-3">
                <a href="{{ route('getLogin') }}" class='menu-link' style="text-decoration: none; color: #333; font-weight: bold;">
                    <i class="bi bi-box-arrow-in-right" style="font-size: 20px; margin-right: 5px;"></i> <span style="font-weight: bold;">Login</span>
                </a>
            </li>
        </ul>
    </div>
</div>



<div class="modal-footer" style="background-color:rgb(135, 25, 25); padding: 5px; display: flex; justify-content: space-between; align-items: center;">
    <img src="{{ asset('images/logo-mipa.png') }}" alt="MIPA Logo" style="height: 30px;">
    <a href="#" class="btn p-1 m-1 d-md-none" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvas">
        <i class="bi bi-list" style="font-size: 24px;"></i> 
    </a>
</div>


