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

<body>

    <div id="app">
        <div id="main " class="layout-horizontal">
            <header class="mb-5">
                {{-- navbar --}}
                @include('partials.users.navbar')
            </header>
            
            <div class="content-wrapper container">
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
