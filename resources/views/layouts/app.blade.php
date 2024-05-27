<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>@yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    @include('partials.admin.assetcss')

</head>

<body class="small">

    <div id="loading" style="display: flex; justify-content: center; align-items: center; height: 100vh; position: fixed; width: 100%; background-color: white; z-index: 9999;">
        <img src="{{ asset("assets/images/svg-loaders/puff.svg") }}" class="me-4" style="width: 3rem" alt="audio" alt="Loading...">
    </div>

    
    <div id="app" style="visibility: hidden;">
        <div id="main" class="layout-horizontal">
            <header>
                {{-- navbar --}}
                @include('partials.users.navbar')
            </header>
            
            <div class="content-wrapper">
                <div class="page-content">
                    @yield('content')
                </div>
            </div>

            {{-- footer --}}
            @include('partials.users.footer')
        </div>
    </div>
    @include('partials.admin.assetjs')


</body>


</html>
