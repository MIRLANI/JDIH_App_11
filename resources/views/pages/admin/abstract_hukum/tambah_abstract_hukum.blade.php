@extends('layouts.admin')

@section('title', 'Tambah Abastrak Hukum')

@section('content')

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 mt-3 col-md-6 order-md-1 order-last">
                    <h3>Tambah Abastrak Hukum</h3>
                    <p class="text-subtitle text-muted">______________________________________</p>
                </div>
                <div class="col-12 mt-3 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tambah Abstrak Hukum</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <!-- // Basic multiple Column Form section start -->
        <section id="multiple-column-form">
            <div class="row match-height">
                <div class="col-12 mt-3">
                    <div class="card">

                        <div class="card-content">
                            <div class="card-body">
                                <form class="form" data-parsley-validate action="" method="GET">
                                    <div class="row">
                                        <div class="mt-2">
                                            <h4 class="card-title"><b>Abstrak</b></h4>
                                        </div>
                                        <div class="col-md-12 col-12 mt-3">
                                            <div class="form-group mandatory">
                                                <label class="form-label" for="sumber">Hukum </label>
                                                <div class="form-group">
                                                    <select class="choices form-select">
                                                        <option value=""> </option>
                                                        <option value="square">Peraturan BPK Nomor 1 Tahun 2013 </option>
                                                        <option value="rectangle">Peraturan Menteri Dalam Negeri
                                                            (Permendagri) Nomor 37 Tahun 2014</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-12 mt-3">
                                            <div class="form-group mandatory">
                                                <label class="form-label" for="title">Nama Abastrak: </label>
                                                <input class="form-control" type="text" placeholder="nama hukum"
                                                    data-parsley-required="true" name="title" id="title"
                                                    value="{{ old('title') ?: session('title') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-12 mt-3">
                                            <div class="form-group mandatory">
                                                <label for="materi_pokok" class="form-label">Materi Pokok: </label>
                                                <textarea class="form-control" id="materi_pokok" name="materi_pokok" rows="2"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-12 mt-3">
                                            <div class="form-group mandatory">
                                                <label for="abstrak" class="form-label">Abstrak: </label>
                                                <textarea class="form-control" id="abstrak" rows="6" name="abstrak"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-12 mt-3">
                                            <div class="form-group mandatory">
                                                <label for="catatan" class="form-label">Catatan: </label>
                                                <textarea class="form-control" id="catatan" rows="6" name="abstrak"></textarea>
                                            </div>
                                        </div>

                                        <div class="col-12 mt-3 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
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
