<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>@yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    @include('partials.users.assetcss')
</head>

<body class="small">
    @include('partials.users.navbar')

             @yield('content')

    @include('partials.users.footer')

    @include('partials.users.assetjs')
</body>

</html>
