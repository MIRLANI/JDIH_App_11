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
            background-color: rgba(0,0,0,0.5); /* Black color overlay */
            background-blend-mode: darken; /* Blend mode to overlay the color */
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

                <div class="mb-3">

                    @if (session('message'))
                        <div class="alert alert-danger">{{ session('message') }}</div>
                    @endif
                </div>
                <div class="card">
                    <div class="card-body p-5">
                        <form method="POST" action="{{ route('postLogin') }}">
                            @csrf
                            
                            <div class="form-group position-relative has-icon-left mb-4">
                                <input type="text" name="username"
                                    class="form-control form-control-xl @error('username') is-invalid @enderror"
                                    placeholder="Username" value="{{ old('username') ?: session('username') }}">
                                <div class="form-control-icon">
                                    <i class="bi bi-person"></i>
                                </div>
                                @error('username')
                                    <div class="invalid-feedback">
                                        <i class="bx bx-radio-circle"> {{ $message }}</i>
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group position-relative has-icon-left mb-4">
                                <input type="password" name="password"
                                    class="form-control form-control-xl  @error('password') is-invalid @enderror"
                                    placeholder="Password" value="{{ old('password') ?: session('password') }}">
                                <div class="form-control-icon">
                                    <i class="bi bi-shield-lock"></i>
                                </div>
                                @error('password')
                                    <div class="invalid-feedback">
                                        <i class="bx bx-radio-circle"> {{ $message }}</i>
                                    </div>
                                @enderror
                            </div>
                          
                            <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('partials.admin.assetjs')
   
</body>


</html>
