@extends('layouts.app')

@section('title', 'JDIH | Jenis')

@section('content')

    <section id="multiple-column-form" class="full-background"
        style="background-image: url('{{ asset('images/fmipa_uho.jpg') }}'); background-size: cover; background-color: rgba(0,0,0,0.7); background-blend-mode: darken; background-position: center;">
        <div class="row match-height">
            <div class="col-11 mx-auto">
                <div class="d-flex justify-content-between align-items-center my-5">
                    <h2 class="mb-0 mx-5" style="color: white;">Jenis Peraturan</h2>
                    <form class="form my-0">
                        <div class="d-flex align-items-center">
                            <input type="text" id="first-name-column" class="form-control p-2 me-2" placeholder="Keyword"
                                name="fname-column">
                            <button type="submit" class="btn btn-primary px-4 py-2">Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <div class="card w-75 contoh start-50 translate-middle-x my-5 text-center">
        <div class="card-body" style="border-radius: 2000px; color: black;">
            <h1 class="card-title" style="color: black;"><b>A</b></h1>
            <div class="card mx-auto">

                <div class="card-body d-flex justify-content-between align-items-center" style="color: black;">
                    <span class="text-start" style="color: black;">Betul dan Tata Usaha Negara</span>
                    <button type="button" class="btn btn-primary">Button</button>
                </div>

                <hr class="my-0 mx-4"> <!-- Horizontal line as a separator -->
                <div class="card-body d-flex justify-content-between align-items-center" style="color: black;">
                    <span class="text-start" style="color: black;">Administrasi dan Tata Usaha Negara</span>
                    <button type="button" class="btn btn-primary">Button</button>
                </div>

                <hr class="my-0 mx-4"> <!-- Horizontal line as a separator -->
                <div class="card-body d-flex justify-content-between align-items-center" style="color: black;">
                    <span class="text-start" style="color: black;">Administrasi dan Tata Usaha Negara</span>
                    <button type="button" class="btn btn-primary">Button</button>
                </div>

            </div>
        </div>
    </div>

    <div class="card w-75 contoh start-50 translate-middle-x my-5 text-center">
        <div class="card-body" style="border-radius: 2000px; color: black;">
            <h1 class="card-title" style="color: black;"><b>B</b></h1>
            <div class="card mx-auto">

                <div class="card-body d-flex justify-content-between align-items-center" style="color: black;">
                    <span class="text-start" style="color: black;">Betul dan Tata Usaha Negara</span>
                    <button type="button" class="btn btn-primary">Button</button>
                </div>

                <hr class="my-0 mx-4"> <!-- Horizontal line as a separator -->
                <div class="card-body d-flex justify-content-between align-items-center" style="color: black;">
                    <span class="text-start" style="color: black;">Betul dan Tata Usaha Negara</span>
                    <button type="button" class="btn btn-primary">Button</button>
                </div>

                <hr class="my-0 mx-4"> <!-- Horizontal line as a separator -->
                <div class="card-body d-flex justify-content-between align-items-center" style="color: black;">
                    <span class="text-start" style="color: black;">Betul dan Tata Usaha Negara</span>
                    <button type="button" class="btn btn-primary">Button</button>
                </div>

            </div>
        </div>
    </div>
@endsection
