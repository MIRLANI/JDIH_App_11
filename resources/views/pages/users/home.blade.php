@extends('layouts.app')


@section('title', 'Database Peraturan | JDHI FMIPA')

@section('content')


    <!-- Basic multiple Column Form section start -->

    <section id="multiple-column-form" class="full-background"
        style="background-image: url('{{ asset('images/fmipa_uho.jpg') }}'); background-size: cover; background-color: rgba(0,0,0,0.7); background-blend-mode: darken; background-position: center; background-attachment: fixed;">
        <div class="container">
            <br>

            <h2 class="pt-4 m-5 text-white text-center">SELAMAT DATANG <br> DI DATABASE PERATURAN JDIH FMIPA</h2>
            <div class="row match-height">
                <div class="col-lg-8 col-md-8 col-sm-10 col-12 mx-auto">
                    <div class="card shadow-lg" style="margin-bottom: 250px; border-radius: 15px;">
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <div class="row align-items-center">
                                                    <div
                                                        class="d-flex flex-column flex-md-row gap-2 gap-md-3 align-items-center justify-content-center w-100">
                                                        <input type="text" id="first-name-column"
                                                            class="form-control px-5 col" placeholder="Search"
                                                            name="fname-column">
                                                        <button type="submit"
                                                            class="btn btn-primary col-12 col-md-auto">Search</button>
                                                        <button class="btn btn-light-secondary col-12 col-md-auto"
                                                            type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseExample" aria-expanded="false"
                                                            aria-controls="collapseExample"
                                                            onclick="toggleZoomBackground();">
                                                            Adv.Search</button>
                                                    </div>
                                                    <div class="collapse" id="collapseExample">
                                                        <div class="card card-body shadow-sm">
                                                            <div class="row">
                                                                <div class="col-md-6 col-12">
                                                                    <div class="form-group">
                                                                        <label for="last-name-column">Tentang</label>
                                                                        <input type="text" id="last-name-column"
                                                                            class="form-control"
                                                                            placeholder="Tentang Peraturan"
                                                                            name="lname-column">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 col-12">
                                                                    <div class="form-group">
                                                                        <label for="city-column">Nomor</label>
                                                                        <input type="text" id="city-column"
                                                                            class="form-control"
                                                                            placeholder="Nomor Peraturan"
                                                                            name="city-column">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 col-12">
                                                                    <div class="form-group">
                                                                        <label for="country-floating">Tahun</label>
                                                                        <div class="form-group">
                                                                            <select
                                                                                class="choices form-select multiple-remove"
                                                                                multiple="multiple">
                                                                                <optgroup label="Years">
                                                                                    @foreach ($produkHukums as $produk)
                                                                                        <option
                                                                                            value="{{ $produk->tahun ? $produk->tahun : '' }}">
                                                                                            {{ $produk->tahun ? $produk->tahun : '' }}
                                                                                        </option>
                                                                                    @endforeach
                                                                                </optgroup>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 col-12">
                                                                    <div class="form-group">
                                                                        <label for="company-column">Tag</label>
                                                                        <div class="form-group">
                                                                            <select
                                                                                class="choices form-select multiple-remove"
                                                                                multiple="multiple">
                                                                                <optgroup label="Tema Peraturan">
                                                                                    @foreach ($subjekHukums as $subjek)
                                                                                        <option
                                                                                            value="{{ $subjek->nama ? $subjek->nama : '' }}">
                                                                                            {{ $subjek->nama ? $subjek->nama : '' }}
                                                                                        </option>
                                                                                    @endforeach
                                                                                </optgroup>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 col-12">
                                                                    <div class="form-group">
                                                                        <label for="email-id-column">Jenis Peraturan</label>
                                                                        <div class="form-group">
                                                                            <select
                                                                                class="choices form-select multiple-remove"
                                                                                multiple="multiple">
                                                                                <optgroup label="Jenis Peraturan">
                                                                                    <option value="Mbkm">Mbkm</option>
                                                                                    <option value="Mbkm">Mbkm</option>
                                                                                    <option value="Mbkm">Mbkm</option>
                                                                                    <option value="Mbkm">Mbkm</option>
                                                                                </optgroup>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>


    <div class="card w-75 contoh start-50 translate-middle-x mb-5"
        style="margin-top: -40px; z-index: 10; background-color: #E8F0FE;">
        <div class="card-body" style="border-radius: 2000px;">
            <h4 class="card-title" style="color: #333;">PERATURAN TERPOPULER</h4>
            <div class="row">
                <div class="col-md-6">
                    <div class="card"
                        style="margin: 10px; background-color: #FFFFFF; border-radius: 20px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2">
                                    <i class="bi bi-file-earmark-text" style="font-size: 48px; color: #4A90E2;"></i>
                                </div>
                                <div class="col-md-10">
                                    <h6 style="margin-bottom: 0;"> <a href="#"
                                            style="font-size: larger; color: #333; transition: color 0.3s;"
                                            onmouseover="this.style.color='#4A90E2'"
                                            onmouseout="this.style.color='#333'">PERDA
                                            Kab. Purworejo No. 3 Tahun 2024 </a> </h6>
                                    <p style="margin-top: 3px; color: #666;">Perubahan atas peraturan Daerah Nomor 4 Tahun
                                        2021 tentang
                                        Pembentukan dan Susunan Perangkat Daerah Kabupaten Purworejo</p>
                                    <hr style="border-top: 1px solid #ccc; margin-top: 10px; margin-bottom: 10px;">
                                </div>
                                <span style="color: #E53E3E; text-align: right; display: block;" class="small">Dilihat
                                    sebanyak 200
                                    kali</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Repeat for other cards with similar changes -->
            </div>
        </div>
    </div>

    <div class="card w-75 contoh start-50 translate-middle-x mb-5"
        style="margin-top: 70px; z-index: 10; background-color: #E8F0FE;">
        <div class="card-body" style="border-radius: 2000px;">
            <h4 class="card-title" style="color: #333;">PERATURAN TERBARU</h4>
            <div class="row">
                @foreach ($produkHukumsTerbaru as $produk)
                    <div class="col-md-6">
                        <div class="card"
                            style="margin: 10px; background-color: #FFFFFF; border-radius: 20px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-2">
                                        <i class="bi bi-file-earmark-text" style="font-size: 48px; color: #4A90E2;"></i>
                                    </div>
                                    <div class="col-md-10">
                                        <h6 style="margin-bottom: 0;"> <a href="{{ route("detail", ["id" => $produk->id, "slug" => $produk->slug]) }}"
                                                style="font-size: larger; color: #333; transition: color 0.3s;"
                                                onmouseover="this.style.color='#4A90E2'"
                                                onmouseout="this.style.color='#333'">{{ $produk->nama }}</a> </h6>
                                        <p style="margin-top: 3px; color: #666;">{{ $produk->deskripsi }}</p>
                                    </div>
                                    <hr style="border-top: 2px dashed #ccc; margin-top: 10px; margin-bottom: 10px;">
                                    <span class="small" style="color: #E53E3E; text-align: right; display: block;">Dibuat
                                        {{ $produk->created_at->diffForHumans() }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- Repeat for other cards with similar changes -->
            </div>
        </div>
    </div>

    <div class="card w-75 contoh start-50 translate-middle-x mb-5"
        style="margin-top: 70px; z-index: 100px; background-color: #E1E3EA; color: black; border-radius: 2%; ">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 text-center mt-5">
                    <img src="{{ asset('images/fmipa_uho.jpg') }}" alt="Descriptive Alt Text" class="img-fluid mx-auto"
                        style="max-width: 70%; border: 1px solid #E1E3EA; border-radius: 20%;">
                    <p class="m-3" style="color: black">STANDAR LAYANAN<br>Website Database Peraturan JDIH FMIPA</p>
                    <hr style="width: 20%; margin-left: auto; margin-right: auto; color:black">
                </div>
                <div class="col-md-6 ">
                    <div class="card my-2"
                        style="margin: 1px; background-color: #FFFFFF; border-radius: 20px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                        <div class="card-body ">
                            <div class="row justify-content-center">
                                <div class="col-auto">
                                    <i class="bi bi-info-circle-fill" style="font-size: 30px; color: #4A90E2;"></i>
                                </div>
                                <div class="col-10">
                                    <p style="color: #666;">Produk Hukum yang diunggah dalam Database Peraturan JDIH FMIPA
                                        berasal dari website
                                        resmi.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card my-2"
                        style="margin: 1px; background-color: #FFFFFF; border-radius: 20px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                        <div class="card-body ">
                            <div class="row justify-content-center">
                                <div class="col-auto">
                                    <i class="bi bi-info-circle-fill" style="font-size: 30px; color: #4A90E2;"></i>
                                </div>
                                <div class="col-10">
                                    <p style="color: #666;">Produk hukum dalam Database Peraturan FMIPA sudah
                                        diklasifikasikan berdasarkan jenis, tema, tahun, maupun asal produk hukum.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Repeat for other cards with similar changes -->
                    <div class="card my-2"
                        style="margin: 1px; background-color: #FFFFFF; border-radius: 20px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                        <div class="card-body ">
                            <div class="row justify-content-center">
                                <div class="col-auto">
                                    <i class="bi bi-info-circle-fill" style="font-size: 30px; color: #4A90E2;"></i>
                                </div>
                                <div class="col-10">
                                    <p style="color: #666;">Layanan pada Database Peraturan FMIPA dapat diakses oleh
                                        Pelaksana FMIPA maupun masyarakat umum secara gratis dan tanpa syarat.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Repeat for other cards with similar changes -->
                </div>
            </div>
        </div>
    </div>












@endsection
