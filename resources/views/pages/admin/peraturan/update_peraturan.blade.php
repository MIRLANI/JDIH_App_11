@extends('layouts.admin')

@section('title', 'JDIH | Update Peraturan')

@section('content')


    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 mt-3 col-md-6 order-md-1 order-last">
                    <h3 class="fw-bold">Update Peraturan</h3>
                    <hr class="text-muted">
                </div>
                <div class="col-12 mt-3 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb bg-transparent">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Update Peraturan</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <!-- // Basic multiple Column Form section start -->
        <section id="multiple-column-form ">
            <div class="row match-height">
                <div class="col-12 mt-3">
                    <div class="card ">
                        <div class="card-header">
                            <a href="{{ route('index.peraturan') }}" class="btn  btn-primary mx-2" title="Delete">
                                <i class="bi bi-arrow-left"></i>
                                Back
                            </a>
                        </div>
                        <div class="card-content">
                            <div class="card-body m-2">
                                {{-- data-parsley-validate --}}
                                <form class="form"
                                    action="{{ route('update.peraturan', ['id' => $product_hukum->id, 'slug' => $product_hukum->slug]) }}"
                                    method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="mt-2">
                                            <h4 class="card-title"><b>Peraturan</b></h4>
                                        </div>
                                        <div class="col-md-6 col-12 mt-3">
                                            <div class="form-group mandatory">
                                                <label class="form-label" for="nama">Nama Peraturan: </label>
                                                <input class="form-control @error('nama') is-invalid @enderror"
                                                    type="text" placeholder="nama peraturan" data-parsley-required="true"
                                                    name="nama" id="nama"
                                                    value="{{ @old('nama') ?: $product_hukum->nama }}">
                                                @error('nama')
                                                    <div class="invalid-feedback">
                                                        <i class="bx bx-radio-circle"> {{ $message }}</i>
                                                    </div>
                                                @enderror
                                                <p class="small mt-2"><i>(Contoh: Paduan Penyusunan Skripsi)</i>

                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12 mt-3">
                                            <div class="form-group mandatory">
                                                <label class="form-label" for="deskripsi">Deskripsi </label>
                                                <input type="text" id="deskripsi"
                                                    class="form-control @error('deskripsi') is-invalid @enderror"
                                                    placeholder="deskripsi" name="deskripsi" id="deskripsi"
                                                    value="{{ old('deskripsi') ?: $product_hukum->deskripsi }}"
                                                    data-parsley-required="true">
                                                @error('deskripsi')
                                                    <div class="invalid-feedback">
                                                        <i class="bx bx-radio-circle"> {{ $message }}</i>
                                                    </div>
                                                @enderror
                                                <p class="small mt-2"><i>(Contoh: Keputusan Dekan Fakultas Matematika dan
                                                        Ilmu Pengetahun Alam Universitas Halu Oleo)</i>
                                                </p>
                                            </div>
                                        </div>
                                        {{-- META DATA  --}}
                                        <div class="mt-2">
                                            <h4 class="card-title"><b>Meta Data</b></h4>
                                        </div>
                                        <div
                                            class="col-md-6 col-12 {{ Auth::user()->role == 'sub admin' ? 'col-md-12' : 'col-md-6' }} mt-3">
                                            <div class="form-group mandatory">
                                                <label for="judul" class="form-label">Judul </label>
                                                <input type="text" id="judul"
                                                    class="form-control @error('judul') is-invalid @enderror" name="judul"
                                                    placeholder="Judul" value="{{ old('judul') ?: $product_hukum->judul }}"
                                                    data-parsley-required="true">
                                                @error('judul')
                                                    <div class="invalid-feedback">
                                                        <i class="bx bx-radio-circle"> {{ $message }}</i>
                                                    </div>
                                                @enderror
                                                <p class="small mt-2"><i>(Contoh: Penetapan Buku Paduan Penyusunana Skripsi
                                                        Dalam Lingkungan Fakultas Matematika dan Ilmu Pengetahuan Alam)</i>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-12 mt-3">
                                            <div class="form-group mandatory">
                                                <label class="form-label" for="teu">Nomor </label>
                                                <input class="form-control @error('nomor') is-invalid @enderror"
                                                    type="text" placeholder="nomor" name="nomor" id="nomor"
                                                    value="{{ old('nomor') ?: $product_hukum->nomor }}"
                                                    data-parsley-required="true">
                                                @error('nomor')
                                                    <div class="invalid-feedback">
                                                        <i class="bx bx-radio-circle"> {{ $message }}</i>
                                                    </div>
                                                @enderror
                                                <p class="small mt-2"><i>(Contoh: 1018/SK/UN29.9/PP/2020 )</i>
                                                </p>
                                            </div>
                                        </div>
                                        @if (Auth::user()->role == 'admin')
                                            <div class="col-md-6 col-12 mt-3">
                                                <div class="form-group mandatory">
                                                    <label for="tipe_dokumen" class="form-label">Sumber Peraturan </label>
                                                    <select id="tahun"
                                                        class="form-control form-select @error('sumber_id') is-invalid @enderror"
                                                        name="sumber_id">
                                                        @foreach ($sumbers as $sumber)
                                                            @if ($sumber->role != 'admin')
                                                                <option value="{{ $sumber->id }}"
                                                                    {{ old('sumber_id', $sumber->sumber_id) == $sumber->id ? 'selected' : '' }}>
                                                                    {{ $sumber->username }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                    @error('sumber_id')
                                                        <div class="invalid-feedback">
                                                            <i class="bx bx-radio-circle"> {{ $message }}</i>
                                                        </div>
                                                    @enderror
                                                    <p class="small mt-2"><i>(Contoh: Peraturan Dekan)</i>
                                                    </p>
                                                </div>
                                            </div>
                                        @else
                                            @if ($sumbers)
                                                <input type="hidden" name="sumber_id" value="{{ $sumbers->id }}">
                                            @endif
                                        @endif


                                        <div class="col-md-6 col-12 mt-3">
                                            <div class="form-group mandatory">
                                                <label class="form-label" for="tahun">Tahun
                                                    <a href="{{ route('index.tahun') }}" class="icon btn-primary mb-2"
                                                        title="Update Bentuk Peraturan">
                                                        <i class="bi bi-file-earmark-plus"></i>
                                                    </a>
                                                </label>

                                                <select id="tahun"
                                                    class="form-control @error('tahun') is-invalid @enderror"
                                                    name="tahun_id">
                                                    <option value="">Pilih Tahun</option>
                                                    @foreach ($tahuns as $tahun)
                                                        <option value="{{ $tahun->id }}"
                                                            @if (old('tahun_id') == $tahun->id) selected
                                                            @elseif ($product_hukum->tahuns && old('tahun_id', $product_hukum->tahuns->id) == $tahun->id)
                                                                selected @endif>
                                                            {{ $tahun->tahun }}
                                                        </option>
                                                    @endforeach
                                                </select>

                                                @error('tahun')
                                                    <div class="invalid-feedback">
                                                        <i class="bx bx-radio-circle"> {{ $message }}</i>
                                                    </div>
                                                @enderror
                                                <p class="small mt-2"><i>(Contoh: 2024)</i>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-12 mt-3">
                                            <div class="form-group mandatory">
                                                <div class="form-group">
                                                    <label class="form-label @error('kategori_id') is-invalid @enderror"
                                                        for="sumber">Kategori Peraturan</label>
                                                    <a href="{{ route('index.kategori') }}" class="icon btn-primary mb-2"
                                                        title="Update Bentuk Peraturan">
                                                        <i class="bi bi-file-earmark-plus"></i>
                                                    </a>
                                                    <select
                                                        class="form-select form-control @error('kategori_id') is-invalid @enderror"
                                                        name="kategori_id" data-parsley-required="true">
                                                        <option value="">Pilih Kategori Peraturan</option>
                                                        @foreach ($kategoris as $category)
                                                            <option value="{{ $category->id }}"
                                                                @if (old('kategori_id') == $category->id) selected
                                                                @elseif (
                                                                    $product_hukum->ketegori &&
                                                                        old('kategori_id') == null &&
                                                                        old('kategori_id', $product_hukum->ketegori->id) == $category->id)
                                                                     selected @endif>
                                                                {{ $category->title }}
                                                            </option>
                                                        @endforeach
                                                    </select>


                                                    @error('kategori_id')
                                                        <div class="invalid-feedback">
                                                            <i class="bx bx-radio-circle"> {{ $message }}</i>
                                                        </div>
                                                    @enderror

                                                    <p class="small mt-2"><i>(Contoh: Peraturan Perundang-Undangan)</i>


                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-6 col-12 mt-3">
                                            <div class="form-group mandatory">
                                                <div class="form-group">
                                                    <label class="form-label " for="subjek">Tag </label>
                                                    <a href="{{ route('index.tag') }}" class="icon btn-primary mb-2"
                                                        title="Update Subjek Hukum">
                                                        <i class="bi bi-file-earmark-plus"></i>
                                                    </a>
                                                    <select
                                                        class="choices form-select multiple-remove m-0 @error('subjek') is-invalid @enderror"
                                                        multiple="multiple" name="subjek[]">
                                                        <option value="">Pilih Tag Dokumen</option>
                                                        <optgroup label="Figures">
                                                            @foreach ($tags as $subjek)
                                                                <option value="{{ $subjek->id }}"
                                                                    @if (old('subjek')) @selected(true)
                                                            @elseif (isset($product_hukum->tagPeraturans) && $product_hukum->tagPeraturans->contains('id', $subjek->id))
                                                                @selected(true) @endif>
                                                                    {{ $subjek->nama }}
                                                                </option>
                                                            @endforeach

                                                        </optgroup>
                                                    </select>
                                                    <p class="small "><i>(Contoh: Buku, Paduan, Modul)</i>
                                                        @error('subjek[]')
                                                        <div class="invalid-feedback">
                                                            <i class="bx bx-radio-circle"> {{ $message }}</i>
                                                        </div>
                                                    @enderror
                                                    </p>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-6 col-12 mt-3">
                                            <div class="form-group mandatory">
                                                <label class="form-label " for="tempat_penetapan">Tempat Penetapan
                                                </label>
                                                <input
                                                    class="form-control @error('tempat_penetapan') is-invalid @enderror"
                                                    type="text" placeholder="Tempat Penetapan..."
                                                    data-parsley-required="true" name="tempat_penetapan"
                                                    id="tempat_penetapan"
                                                    value="{{ old('tempat_penetapan') ?: $product_hukum->tempat_penetapan }}">
                                                @error('tempat_penetapan')
                                                    <div class="invalid-feedback">
                                                        <i class="bx bx-radio-circle"> {{ $message }}</i>
                                                    </div>
                                                @enderror
                                                <p class="small mt-2"><i>(Contoh: Kendari)</i>
                                                </p>
                                            </div>
                                        </div>





                                        <div class="col-md-6 col-12 mt-3">
                                            <div class="form-group mandatory">
                                                <label class="form-label" for="jumlah_halaman">Jumlah Halaman </label>
                                                <input class="form-control @error('jumlah_halaman') is-invalid @enderror"
                                                    type="text" placeholder="Jumlah Halaman"
                                                    data-parsley-required="true" name="jumlah_halaman"
                                                    id="jumlah_halaman"
                                                    value="{{ old('jumlah_halaman') ?: $product_hukum->jumlah_halaman }}">
                                                @error('jumlah_halaman')
                                                    <div class="invalid-feedback">
                                                        <i class="bx bx-radio-circle"> {{ $message }}</i>
                                                    </div>
                                                @enderror
                                                <p class="small mt-2"><i>(Contoh: 5 Halaman )</i>
                                                </p>
                                            </div>
                                        </div>


                                        <div class="col-md-6 col-12 mt-3">
                                            <div class="form-group mandatory">
                                                <label class="form-label" for="bahasa">Bahasa </label>
                                                <fieldset class="form-group ">
                                                    <select class="form-select @error('bahasa') is-invalid @enderror"
                                                        name="bahasa" id="basicSelect">
                                                        <option value="indonesia"
                                                            @if (@old('bahasa')) @selected(true)
                                                        @elseif (@old('bahasa') == null && $product_hukum->bahasa == 'indonesia')
                                                            @selected(true) @endif>
                                                            Indonesia</option>
                                                        <option value="inggris"
                                                            @if (@old('bahasa')) @selected(true)
                                                        @elseif (@old('bahasa') == null && $product_hukum->bahasa == 'inggris')
                                                            @selected(true) @endif>
                                                            Inggris</option>
                                                    </select>
                                                </fieldset>
                                                @error('bahasa')
                                                    <div class="invalid-feedback">
                                                        <i class="bx bx-radio-circle"> {{ $message }}</i>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12 mt-3 ">
                                            <div class="form-group mandatory">
                                                <label class="form-label" for="lokasi">Lokasi </label>
                                                <input class="form-control  @error('lokasi') is-invalid @enderror"
                                                    type="text" placeholder="Lokasi" data-parsley-required="true"
                                                    name="lokasi" id="lokasi"
                                                    value="{{ old('lokasi') ?: $product_hukum->lokasi }}">
                                                @error('lokasi')
                                                    <div class="invalid-feedback">
                                                        <i class="bx bx-radio-circle"> {{ $message }}</i>
                                                    </div>
                                                @enderror
                                                <p class="small mt-2"><i>(Contoh: Indonesia, FMIPA UHO )</i>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12 mt-3">
                                            <div class="form-group mandatory">
                                                <label class="form-label" for="teu">T.E.U. </label>
                                                <input class="form-control  @error('teu') is-invalid @enderror"
                                                    type="text" placeholder="T.E.U" name="teu" id="teu"
                                                    value="{{ old('teu') ?: $product_hukum->teu }}"
                                                    data-parsley-required="true">
                                                @error('teu')
                                                    <div class="invalid-feedback">
                                                        <i class="bx bx-radio-circle"> {{ $message }}</i>
                                                    </div>
                                                @enderror
                                                <p class="small mt-2"><i>(Contoh: FMIPA UHO )</i>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-12 mt-3">
                                            <div class="form-group mandatory">
                                                <label class="form-label " for="sumber">Status </label>
                                                <fieldset class="form-group">

                                                    <select class="form-select @error('status') is-invalid @enderror"
                                                        id="basicSelect" name="status">
                                                        <option value="berlaku"
                                                            @if (old('status')) @selected(true)
                                                            @elseif (old('status') == null && $product_hukum->status == 'berlaku')
                                                                @selected(true) @endif>
                                                            Berlaku</option>
                                                        <option value="tidak berlaku"
                                                            @if (old('status')) @selected(true)
                                                            @elseif (old('status') == null && $product_hukum->status == 'tidak berlaku')
                                                                @selected(true) @endif>
                                                            Tidak Berlaku</option>
                                                    </select>
                                                </fieldset>
                                                @error('status')
                                                    <div class="invalid-feedback">
                                                        <i class="bx bx-radio-circle"> {{ $message }}</i>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>



                                        <div class="col-md-4 col-12 mt-3">
                                            <div class="form-group ">
                                                <label class="form-label " for="tanggal_penetapan">Tanggal Penetapan
                                                </label>
                                                <input
                                                    class="form-control @error('tanggal_penetapan') is-invalid @enderror"
                                                    type="date" placeholder="Tanggal Penetapan"
                                                    data-parsley-required="true" name="tanggal_penetapan"
                                                    id="tanggal_penetapan"
                                                    value="{{ old('tanggal_penetapan') ?: $product_hukum->tanggal_penetapan }}">
                                                @error('tanggal_penetapan')
                                                    <div class="invalid-feedback">
                                                        <i class="bx bx-radio-circle"> {{ $message }}</i>
                                                    </div>
                                                @enderror
                                                <p class="small mt-2"><i>(Contoh: 29 Mei 2014)</i>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-12 mt-3">
                                            <div class="form-group ">
                                                <label class="form-label " for="tanggal_pengundangan">Tanggal Pengundangan
                                                </label>
                                                <input
                                                    class="form-control @error('tanggal_pengundangan') is-invalid @enderror"
                                                    type="date" placeholder="Tanggal Pengundangan"
                                                    data-parsley-required="true" name="tanggal_pengundangan"
                                                    id="tanggal_pengundangan"
                                                    value="{{ old('tanggal_pengundangan') ?: $product_hukum->tanggal_pengundangan }}">
                                                @error('tanggal_pengundangan')
                                                    <div class="invalid-feedback">
                                                        <i class="bx bx-radio-circle"> {{ $message }}</i>
                                                    </div>
                                                @enderror
                                                <p class="small mt-2"><i>(Contoh: 29 Mei 2024)</i>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-12 mt-3">
                                            <div class="form-group ">
                                                <label class="form-label " for="tanggal_berlaku">Tanggal Berlaku </label>
                                                <input class="form-control @error('tanggal_berlaku') is-invalid @enderror"
                                                    type="date" placeholder="Tanggal Berlaku"
                                                    data-parsley-required="true" name="tanggal_berlaku"
                                                    id="tanggal_berlaku"
                                                    value="{{ old('tanggal_berlaku') ?: $product_hukum->tanggal_berlaku }}">
                                                @error('tanggal_berlaku')
                                                    <div class="invalid-feedback">
                                                        <i class="bx bx-radio-circle"> {{ $message }}</i>
                                                    </div>
                                                @enderror
                                                <p class="small mt-2"><i>(Contoh: 29 Mei 2024)</i>
                                                </p>
                                            </div>
                                        </div>

                                        {{-- status peraturan --}}
                                        {{-- @include('pages.admin.peraturan.status.update') --}}

                                        {{-- modal file old --}}
                                        @include('pages.admin.peraturan.modalFileUpdate')

                                        <div class="col-md-12 col-12 ">
                                            <div class="form-group ">
                                                <label class="form-label" for="sumber">File Old </label>
                                                <!-- Button to Open Modal -->
                                                <button type="button" class="btn btn-primary px-3 my-5"
                                                    data-bs-toggle="modal" data-bs-target="#pdfModal"
                                                    onclick="document.getElementById('pdfIframe').src = document.getElementById('pdfIframe').getAttribute('data-src')">
                                                    <i class="bi bi-eye-fill me-2"></i>Preview
                                                </button>
                                            </div>
                                        </div>
                                        <div class=" col-12">
                                            <div class="form-group ">
                                                <input type="file" class="form-control form-control-sm"
                                                    image-crop-aspect-ratio="1:1" name="file"
                                                    value="{{ $product_hukum->file }}"
                                                    class="@error('file') is-invalid @enderror">
                                                @error('file')
                                                    <div class="invalid-feedback">
                                                        <i class="bx bx-radio-circle"> {{ $message }}</i>
                                                    </div>
                                                @enderror
                                                <p class="small mt-2"><i>Update file peraturan format pdf</i>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 mt-3 d-flex  justify-content-end">
                                            <button class="btn btn-primary me-3 mb-1">Submit</button>
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
