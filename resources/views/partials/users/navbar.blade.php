<header class="mt-0">
    <nav class="main-navbar" style=" width: 100%; top: 0; z-index: 1000; background-color: rgb(135, 25, 25)">
        <div class="container">
            <div class="navbar-header" style="display: flex; align-items: center;">
                <a href="{{ route('home') }}" class="navbar-brand" style="flex-grow: 1;">
                    <img src="{{ asset('images/logo-mipa.png') }}" alt="Website Logo" style="height: 30px;">
                </a>
                <div class="d-flex justify-content-between">
                    <ul class="d-md-flex flex-md-row flex-column">
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
                    </ul>
                   
                </div>
            </div>
        </div>
    </nav>

    {{-- <!-- Burger button responsive -->
    <a href="#" class="burger-btn d-block d-xl-none p-2">
        <i class="bi bi-justify fs-3"></i>
    </a> --}}
</header>


<button class="btn p-2 m-3 d-md-none float-end" data-bs-toggle="modal" data-bs-target="#navbarModal">
    <i class="bi bi-list" style="font-size: 24px;"></i>
</button>
<div class="modal fade" id="navbarModal" tabindex="-1" aria-labelledby="navbarModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color:rgb(135, 25, 25); color: #fff; padding: 10px; border-bottom: 1px solid #333;">
                <h5 class="modal-title" id="navbarModalLabel" style="font-weight: bold; color: #fff;">Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="background-color: #fff; border: none; padding: 5px; font-size: 18px;"></button>
            </div>
            <div class="modal-body" style="padding: 20px;">
                <ul style="list-style: none; padding: 0; margin: 0;">
                    <li style="margin-bottom: 10px;">
                        <a href="{{ route('home') }}" class='menu-link' style="text-decoration: none; color: #333; font-weight: bold;">
                            Beranda
                        </a>
                    </li>
                    <li style="margin-bottom: 10px;">
                        <a href="{{ route('subjek') }}" class='menu-link' style="text-decoration: none; color: #333; font-weight: bold;">
                            Jenis
                        </a>
                    </li>
                    <li style="margin-bottom: 10px;">
                        <a href="{{ route('sumber') }}" class='menu-link' style="text-decoration: none; color: #333; font-weight: bold;">
                            Sumber
                        </a>
                    </li>
                    <li style="margin-bottom: 10px;">
                        <a href="{{ route('tahun') }}" class='menu-link' style="text-decoration: none; color: #333; font-weight: bold;">
                            Tahun
                        </a>
                    </li>
                    <li style="margin-bottom: 10px;">
                        <a href="{{ route('getLogin') }}" class='menu-link' style="text-decoration: none; color: #333; font-weight: bold;">
                            <i class="bi bi-box-arrow-in-right" style="font-size: 20px; margin-right: 5px;"></i> Login
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>