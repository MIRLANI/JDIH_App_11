<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('partials.admin.assetcss')
    <title>Error 404</title>
</head>
<body>
    <div id="error">
        <div class="error-page container">
            <div class="col-md-8 col-12 offset-md-2">
                <div class="text-center">
                    <img class="img-error" src="{{ asset("assets/images/samples/error-404.svg") }}" alt="Not Found">
                    <h1 class="error-title">TIDAK DITEMUKAN</h1>
                    <p class='fs-5 text-gray-600'>Halaman yang Anda cari tidak ditemukan.</p>
                    <a href="{{ route("home") }}" class="btn btn-lg btn-outline-primary mt-3">Go Home</a>
                </div>
            </div>
        </div>


    </div>
</body>

    @include('partials.admin.assetjs')

</html>

