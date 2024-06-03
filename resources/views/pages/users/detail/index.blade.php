@extends('layouts.app')

@section('title', 'JDIH FMIPA | Detail Peraturan')

@section('content')

    <section id="multiple-column-form" class="full-background"
        style="background-image: url('{{ asset('images/fmipa_uho.jpg') }}'); background-size: cover; background-color: rgba(0,0,0,0.7); background-blend-mode: darken; background-position: center;">
        <div class="row match-height">
            <div class="col-11 mx-auto">
                <div class="d-flex flex-column align-items-start m-5">
                    <div class="text-secondary mb-3" style="font-size: 20px;">
                        {{ $produkHukum->nama ?? '' }} 
                    </div>
                    <div class="text-white" style="font-size: 25px;">
                        {{ $produkHukum->deskripsi ?? '' }}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-8 pe-2">
                    @include('pages.users.detail.materiAbstrak')
                    @include('pages.users.detail.metadata')
                </div>
                <div class="col-md-4 ps-2">
                   @include('pages.users.detail.file')
                    @include('pages.users.detail.status')
                </div>
            </div>
        </div>
    </div>
@endsection
