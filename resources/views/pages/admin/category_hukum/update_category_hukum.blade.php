@extends('layouts.admin')

@section('title', 'Category Hukum Update')

@section('content')

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 mt-3 col-md-6 order-md-1 order-last">
                    <h3>Update Kategori Hukum</h3>
                    <p class="text-subtitle text-muted">______________________________________</p>
                </div>
                <div class="col-12 mt-3 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Update Kategori Hukum</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section id="input-validation">
            <div class="row match-height">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header my-2">
                            <a href="/admin/category-hukum" class="btn  btn-primary mx-2" title="Delete">
                                <i class="bi bi-arrow-left"></i>
                                Back
                            </a>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form" action="/admin/category-hukum-update/{{ $categoryHukum->slug }}"
                                    method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="nama_hukum">Nama</label>
                                                <input type="text" name="title" id="title"
                                                    class="form-control @error('title') is-invalid @enderror" placeholder="nama hukum"
                                                    value="{{ $categoryHukum->title ?: '' }}" id="valid-state" required>
                                                @error('title')
                                                    <div class="invalid-feedback">
                                                        <i class="bx bx-radio-circle"> {{ $message }}</i>
                                                    </div>
                                                @enderror
                                                <p class="small mt-2"><i>(Contoh: Peraturan Badan Pemeriksa Keuangan)</i>
                                                </p>

                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="last-name-column">Singkatan</label>
                                                <input type="text" name="short_title" id="short_title" id="valid-state"
                                                    class="form-control @error('short_title') is-invalid @enderror" is-invalid" placeholder="singkatan"
                                                    value="{{ $categoryHukum->short_title ?: '' }}" required>
                                                    @error('short_title')
                                                    <div class="invalid-feedback">
                                                        <i class="bx bx-radio-circle"> {{ $message }}</i>
                                                    </div>
                                                @enderror
                                                <p class="small mt-2"><i>(Contoh: Peraturan BPK)</i></p>
                                            </div>
                                        </div>


                                        <div class="form-group col-12 my-3">
                                            <div class='form-check'>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="checkbox5" class='form-check-input' checked>
                                                    <label for="checkbox5">Remember Me</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit" name="tambah"
                                                class="btn btn-primary me-1 mb-1">Update</button>
                                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

@endsection
