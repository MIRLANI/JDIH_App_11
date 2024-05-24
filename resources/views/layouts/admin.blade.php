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

    <div id="app">
        @include('partials.admin.navbar')

        <div id="main" class='layout-navbar'>
            @include('partials.admin.header')
            {{-- <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header> --}}
            <div id="main-content">
                @yield('content')
            </div>

            @include('partials.admin.footer')

        </div>
    </div>

    @include('partials.admin.assetjs')




</body>

</html>
