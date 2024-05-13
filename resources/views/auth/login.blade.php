<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @include('partials.admin.assetcss')
    <style>
        html,
        body {
            height: 100%;
        }
        body {
            background: url('{{ asset('images/fmipa_uho.jpg') }}');
            background-size: cover;
            height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>

<body class="small">
    <div class="container mt-5 ">
        <div class="row justify-content-center ">
            <div class="col-md-6">
               
                <div class="card">
                    <div class="card-body p-5">
                        <form method="POST" action="{{ route('postLogin') }}">
                            @csrf
                            <div class="form-group position-relative has-icon-left mb-4">
                                <input type="text" name="username"
                                    class="form-control form-control-xl @error('username') is-invalid @enderror"
                                    placeholder="Username" value="{{ old('username') }}">
                                <div class="form-control-icon">
                                    <i class="bi bi-person"></i>
                                </div>
                            </div>
                            <div class="form-group position-relative has-icon-left mb-4">
                                <input type="password" name="password"
                                    class="form-control form-control-xl  @error('password') is-invalid @enderror"
                                    placeholder="Password" value="{{ old('password') }}">
                                <div class="form-control-icon">
                                    <i class="bi bi-shield-lock"></i>
                                </div>
                            </div>
                            <div class="form-check form-check-lg d-flex align-items-end">
                                <input class="form-check-input me-2" type="checkbox" value=""
                                    id="flexCheckDefault">
                                <label class="form-check-label text-gray-600" for="flexCheckDefault">
                                    Keep me logged in
                                </label>
                            </div>
                            <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

@include('partials.admin.assetjs')

</html>
