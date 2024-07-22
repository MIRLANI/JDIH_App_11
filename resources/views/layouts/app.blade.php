<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>@yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    
    @include('partials.admin.assetcss')
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> --}}
   

</head>

{{-- <body class="small"> --}}
<body>

    <div id="loading" style="display: flex; justify-content: center; align-items: center; height: 100vh; position: fixed; top: 0; left: 0; width: 100%; background-color: white; z-index: 9999;">
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
