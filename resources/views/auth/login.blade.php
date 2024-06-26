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
    <div id="loading" style="display: flex; justify-content: center; align-items: center; height: 100vh; position: fixed; width: 100%; background-color: white; z-index: 9999;">
        <img src="{{ asset("assets/images/svg-loaders/puff.svg") }}" class="me-4" style="width: 3rem" alt="audio" alt="Loading...">
    </div>
    
    
    <div class="container mt-5 ">
        <div class="row justify-content-center ">
            <div class="col-md-6">
                <div class="mb-3" style="position: fixed; top: 200px; left: 50%; transform: translateX(-50%); z-index: 1000; max-width: 400px; width: 100%;">
                    @if (session('message'))
                        <div class="alert alert-danger" style="width: 100%;">{{ session('message') }}</div>
                    @endif
                </div>
                <div class="card" style="max-width: 400px; margin: auto;">
                    <div class="card-body p-4">
                        <form method="POST" action="{{ route('postLogin') }}">
                            @csrf
                            
                            <div class="form-group position-relative has-icon-left mb-3">
                                <input type="text" name="email"
                                    class="form-control form-control-lg @error('email') is-invalid @enderror"
                                    placeholder="Email" value="{{ old('email') ?: session('email') }}">
                                <div class="form-control-icon">
                                    <i class="bi bi-person"></i>
                                </div>
                                @error('email')
                                    <div class="invalid-feedback">
                                        <i class="bx bx-radio-circle"> {{ $message }}</i>
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group position-relative has-icon-left mb-3">
                                <input type="password" name="password"
                                    class="form-control form-control-lg  @error('password') is-invalid @enderror"
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
                          
                            <button class="btn btn-primary btn-block btn-lg shadow-lg mt-4">Log in</button>
                        </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    @include('partials.admin.assetjs')
   
</body>


</html>
