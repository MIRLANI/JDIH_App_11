@extends('layouts.admin')

@section('title', 'tambah produk hukum')

@section('content')

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 mt-3 col-md-6 order-md-1 order-last">
                    <h3>Tambah Produk Hukum</h3>
                    <p class="text-subtitle text-muted">______________________________________</p>
                </div>
                <div class="col-12 mt-3 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tambah Produk Hukum</li>
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
                        {{-- <div class="card-header">
                            <h4 class="card-title"><b>Produk Hukum</b></h4>
                        </div> --}}
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form" data-parsley-validate action="/product-hukum-add" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="mt-2">
                                            <h4 class="card-title"><b>Hukum</b></h4>
                                        </div>
                                        <div class="col-md-6 col-12 mt-3">
                                            <div class="form-group mandatory">
                                                <label class="form-label" for="title">Nama Hukum: </label>
                                                <input class="form-control" type="text" placeholder="nama hukum"
                                                    data-parsley-required="true" name="title" id="title"
                                                    value="{{ old('title') ?: session('title') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12 mt-3">
                                            <div class="form-group">
                                                <label for="deskripsi" class="form-label">Deskripsi </label>
                                                <input type="text" id="deskripsi" class="form-control"
                                                    placeholder="deskripsi" name="deskripsi" id="deskripsi"
                                                    value="{{ old('deskripsi') ?: session('deskripsi') }}">
                                            </div>
                                        </div>

                                        <div class="mt-5"></div>
                                        <div class="mt-2">
                                            <h4 class="card-title"><b>Meta Data</b></h4>
                                        </div>


                                        <div class="col-md-6 col-12 mt-3">
                                            <div class="form-group mandatory">
                                                <label for="tipe_document" class="form-label">Tipe Dokument </label>
                                                <input type="text" id="tipe_document" class="form-control"
                                                    name="tipe_document" placeholder="tipe dokument"
                                                    data-parsley-required="true"
                                                    value="{{ old('tipe_document') ?: session('tipe_document') }}">
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-12 mt-3">
                                            <div class="form-group">
                                                <label for="judul" class="form-label">Judul </label>
                                                <input type="text" id="judul" class="form-control" name="judul"
                                                    placeholder="Judul" value="{{ old('judul') ?: session('judul') }}">
                                            </div>
                                        </div>



                                        <div class="col-md-6 col-12 mt-3">
                                            <div class="form-group mandatory">
                                                <label class="form-label" for="tahun">Tahun </label>
                                                <input class="form-control" type="number" placeholder="Tahun"
                                                    data-parsley-required="true" name="tahun" id="tahun"
                                                    value="{{ old('tahun') ?: session('tahun') }}">
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-12 mt-3">
                                            <div class="form-group mandatory">
                                                <label class="form-label" for="tempat_penetaan">Tempat Penetapan </label>
                                                <input class="form-control" type="text" placeholder="Tempat Penetapan"
                                                    data-parsley-required="true" name="tempat_penetaan" id="tempat_penetaan"
                                                    value="{{ old('tempat_penetaan') ?: session('tempat_penetaan') }}">
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-12 mt-3">
                                            <div class="form-group mandatory">
                                                <label class="form-label" for="tanggal_penetapan">Tanggal Penetapan </label>
                                                <input class="form-control" type="date" placeholder="Tanggal Penetapan"
                                                    data-parsley-required="true" name="tanggal_penetapan"
                                                    id="tanggal_penetapan"
                                                    value="{{ old('tanggal_penetapan') ?: session('tanggal_penetapan') }}">
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-12 mt-3">
                                            <div class="form-group mandatory">
                                                <label class="form-label" for="tanggal_pengundangan">Tanggal Pengundangan
                                                </label>
                                                <input class="form-control" type="date"
                                                    placeholder="Tanggal Pengundangan" data-parsley-required="true"
                                                    name="tanggal_pengundangan" id="tanggal_pengundangan"
                                                    value="{{ old('tanggal_pengundangan') ?: session('tanggal_pengundangan') }}">
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-12 mt-3">
                                            <div class="form-group mandatory">
                                                <label class="form-label" for="tanggal_berlaku">Tanggal Berlaku </label>
                                                <input class="form-control" type="date" placeholder="Tanggal Berlaku"
                                                    data-parsley-required="true" name="tanggal_berlaku"
                                                    id="tanggal_berlaku"
                                                    value="{{ old('tanggal_berlaku') ?: session('tanggal_berlaku') }}">
                                            </div>
                                        </div>

                                      

                                        <div class="col-md-6 col-12 mt-3">
                                            <div class="form-group mandatory">
                                                <label class="form-label" for="sumber">Bentuk Peraturan</label>
                                                <div class="form-group">
                                                    <select class="choices form-select">
                                                        <option value="square">Peraturan Badan Pemeriksa Keuangan</option>
                                                        <option value="rectangle">Peraturan Menteri Dalam Negeri</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-12 mt-3">
                                            <div class="form-group mandatory">
                                                <label class="form-label" for="subjek">Subjek </label>
                                                <div class="form-group">
                                                    <select class="choices form-select multiple-remove"
                                                        multiple="multiple">
                                                        <optgroup label="Figures">
                                                            <option value="romboid">Romboid</option>
                                                            <option value="trapeze" selected>Trapeze</option>
                                                            <option value="triangle">Triangle</option>
                                                            <option value="polygon">Polygon</option>
                                                        </optgroup>
                                                        <optgroup label="Colors">
                                                            <option value="red">Red</option>
                                                            <option value="green">Green</option>
                                                            <option value="blue" selected>Blue</option>
                                                            <option value="purple">Purple</option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6 col-12 mt-3">
                                            <div class="form-group mandatory">
                                                <label class="form-label" for="sumber">Sumber </label>
                                                <input class="form-control" type="text" placeholder="Sumber"
                                                    data-parsley-required="true" name="sumber" id="sumber"
                                                    value="{{ old('sumber') ?: session('sumber') }}">
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-12 mt-3">
                                            <div class="form-group mandatory">
                                                <label class="form-label" for="sumber">Status </label>
                                                <fieldset class="form-group">
                                                    <select class="form-select" id="basicSelect">
                                                        <option>Aktif</option>
                                                        <option>Tidak Aktif</option>
                                                    </select>
                                                </fieldset>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-12 mt-3">
                                            <div class="form-group mandatory">
                                                <label class="form-label" for="bahasa">Bahasa </label>
                                                <fieldset class="form-group">
                                                    <select class="form-select" id="basicSelect">
                                                        <option>Indonesia</option>
                                                        <option>Inggris</option>
                                                    </select>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12 mt-3 ">
                                            <div class="form-group mandatory">
                                                <label class="form-label" for="lokasi">Lokasi </label>
                                                <input class="form-control" type="text" placeholder="Lokasi"
                                                    data-parsley-required="true" name="lokasi" id="lokasi"
                                                    value="{{ old('lokasi') ?: session('lokasi') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12 mt-3">
                                            <div class="form-group ">
                                                <label class="form-label" for="teu">T.E.U. </label>
                                                <input class="form-control" type="text" placeholder="T.E.U"
                                                    name="teu" id="teu"
                                                    value="{{ old('teu') ?: session('teu') }}">
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-12 mt-3">
                                            <div class="form-group ">
                                                <label class="form-label" for="bidang">Bidang </label>
                                                <input class="form-control" type="text" placeholder="Bidang"
                                                    name="bidang" id="bidang"
                                                    value="{{ old('bidang') ?: session('bidang') }}">
                                            </div>
                                        </div>

                                        {{-- status Hukum --}}
                                        <div class="mt-5"></div>
                                        <div class="mt-2">
                                            <h4 class="card-title"><b>Status Hukum</b></h4>
                                        </div>


                                        <div class="col-md-6 col-12 mt-3">
                                            <div class="form-group mandatory">
                                                <label class="form-label" for="sumber">Mengubah </label>
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
                                        <div class="col-md-6 col-12 mt-3">
                                            <div class="form-group mandatory">
                                                <label class="form-label" for="sumber">Diubah </label>
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
                                        <div class="col-md-6 col-12 mt-3">
                                            <div class="form-group mandatory">
                                                <label class="form-label" for="sumber">Mencabut </label>
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
                                        <div class="col-md-6 col-12 mt-3">
                                            <div class="form-group mandatory">
                                                <label class="form-label" for="sumber">Dicabut </label>
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







                                        <div class=" col-12 mt-3 mt-4">
                                            <div class="form-group ">
                                                <input type="file" class="image-crop-filepond"
                                                    image-crop-aspect-ratio="1:1">
                                            </div>
                                        </div>






                                        <div class="col-12 mt-3">
                                            <div class='form-group'>
                                                <div class="form-check mandatory">
                                                    <input type="checkbox" id="checkbox5" class='form-check-input'
                                                        checked data-parsley-required="true"
                                                        data-parsley-error-message="You have to accept our terms and conditions to proceed.">
                                                    <label for="checkbox5" class="form-check-label form-label">I
                                                        accept these terms and conditions.
                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                    <div class="row">
                                        <div class="col-12 mt-3 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                            <button type="reset"
                                                class="btn btn-light-secondary me-1 mb-1">Reset</button>
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
