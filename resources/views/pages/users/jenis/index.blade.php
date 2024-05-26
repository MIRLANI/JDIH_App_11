@extends('layouts.app')

@section('title', 'JDIH | Jenis')

@section('content')

     @include('pages.users.jenis.pencarianJenis')


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

   
@endsection
