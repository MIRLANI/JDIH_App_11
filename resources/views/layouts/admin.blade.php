<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    @include('partials.admin.assetcss')

</head>

<body class="small">

    <div id="loading"
        style="display: flex; justify-content: center; align-items: center; height: 100vh; position: fixed; width: 100%; background-color: white; z-index: 9999;">
        <img src="{{ asset('assets/images/svg-loaders/puff.svg') }}" class="me-4" style="width: 3rem" alt="audio"
            alt="Loading...">
    </div>

    <div id="app">
        @if (Auth::user()->role == 'admin')
            @include('partials.admin.navbar')
        @else
            @include('partials.admin.navbarProdik')
        @endif
        <div id="main" class='layout-navbar'>
            @include('partials.admin.header')
            {{-- <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header> --}}
            <div id="main-content">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            {{ $error }}
                        @endforeach
                    </div>
                @endif
                @if (session('message'))
                    <div class="alert alert-success">{{ session('message') }}</div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif
                @yield('content')
            </div>

            @include('partials.admin.footer')

        </div>
    </div>

    @include('partials.admin.assetjs')




</body>

</html>
