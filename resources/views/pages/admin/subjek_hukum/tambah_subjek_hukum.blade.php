@extends('layouts.admin')

@section('nama', 'category hukum')

@section('content')

    <div class="page-heading">
        <div class="page-nama">
            <div class="row">
                <div class="col-12 mt-3 col-md-6 order-md-1 order-last">
                    <h3>Tambah Subjek Hukum</h3>
                    <p class="text-subnama text-muted">______________________________________</p>
                </div>
                <div class="col-12 mt-3 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tambah Subjek Hukum</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section id="multiple-column-form">
            <div class="row match-height">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header my-2">
                            <a href="{{ route('index.subjek_hukum') }}" class="btn  btn-primary mx-2" nama="Delete">
                                <i class="bi bi-arrow-left"></i>
                                Back
                            </a>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form" action="{{ route('store.subjek_hukum') }}" method="POST">
                                    @csrf
                                    <div class="row mx-2">
                                        <div class="col-md-6 col-12 ">
                                            <div class="form-group">
                                                <label for="nama_hukum" class="m-1">Nama</label>
                                                <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror"
                                                    placeholder="nama subjek"  value="{{ old('nama') ?: session('nama') }}">
                                                    @error('nama')
                                                    <div class="invalid-feedback">
                                                        <i class="bx bx-radio-circle"> {{ $message }}</i>
                                                    </div>
                                                @enderror
                                                <p class="small mt-2"><i>(Contoh: KEPEGAWAIAN)</i>
                                                </p>
                                            </div>
                                        </div>
                                       
                                      
                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit" name="tambah"
                                                class="btn btn-primary me-1 mb-1">Tambah</button>
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
