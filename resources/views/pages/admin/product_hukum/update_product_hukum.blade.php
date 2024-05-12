@extends('layouts.admin')

@section('title', 'tambah produk hukum')

@section('content')


    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 mt-3 col-md-6 order-md-1 order-last">
                    <h3>Update Produk Hukum</h3>
                    <p class="text-subtitle text-muted">__________________________________________</p>
                </div>
                <div class="col-12 mt-3 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Update Produk Hukum</li>
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
                            <a href="/admin/product-hukum" class="btn  btn-primary mx-2" title="Delete">
                                <i class="bi bi-arrow-left"></i>
                                Back
                            </a>
                        </div>
                        <div class="card-content">
                            <div class="card-body m-2">
                                {{-- data-parsley-validate --}}
                                <form class="form" action="/admin/product-hukum-add" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="mt-2">
                                            <h4 class="card-title"><b>Hukum</b></h4>
                                        </div>
                                        <div class="col-md-6 col-12 mt-3">
                                            <div class="form-group mandatory">
                                                <label class="form-label" for="nama">Nama Hukum: </label>
                                                <input class="form-control @error('nama') is-invalid @enderror"
                                                    type="text" placeholder="nama hukum" data-parsley-required="true"
                                                    name="nama" id="nama"
                                                    value="{{ @old('nama') ?: $product_hukum->nama }}">
                                                @error('nama')
                                                    <div class="invalid-feedback">
                                                        <i class="bx bx-radio-circle"> {{ $message }}</i>
                                                    </div>
                                                @enderror
                                                <p class="small mt-2"><i>(Contoh: Peraturan BPK Nomor 1 Tahun 2013)</i>
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
                                                <p class="small mt-2"><i>(Contoh: Perubahan Atas Peraturan Badan Pemeriksa
                                                        Keuangan Nomor 1 Tahun 2011 Tentang Majelis Kehormatan Kode Etik
                                                        Badan Pemeriksa Keuangan)</i>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="mt-5"></div>
                                        <div class="mt-2">
                                            <h4 class="card-title"><b>Meta Data</b></h4>
                                        </div>
                                        <div class="col-md-6 col-12 mt-3">
                                            <div class="form-group mandatory">
                                                <label for="tipe_dokumen" class="form-label">Tipe Dokument </label>
                                                <input type="text" id="tipe_dokumen"
                                                    class="form-control @error('tipe_dokumen') is-invalid @enderror"
                                                    name="tipe_dokumen" placeholder="tipe dokument"
                                                    data-parsley-required="true"
                                                    value="{{ old('tipe_dokumen') ?: $product_hukum->tipe_dokumen }}">
                                                @error('tipe_dokumen')
                                                    <div class="invalid-feedback">
                                                        <i class="bx bx-radio-circle"> {{ $message }}</i>
                                                    </div>
                                                @enderror
                                                <p class="small mt-2"><i>(Contoh: Peraturan Perundang-undangan)</i>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-12 mt-3">
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
                                                <p class="small mt-2"><i>(Contoh: Peraturan Badan Pemeriksa Keuangan Nomor 1
                                                        Tahun 2013 tentang Perubahan Atas Peraturan Badan Pemeriksa Keuangan
                                                        Nomor 1 Tahun 2011 Tentang Majelis Kehormatan Kode Etik Badan
                                                        Pemeriksa Keuangan)</i>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12 mt-3">
                                            <div class="form-group mandatory">
                                                <label class="form-label" for="tahun">Tahun </label>
                                                <input class="form-control  @error('tahun') is-invalid @enderror"
                                                    type="number" placeholder="Tahun" data-parsley-required="true"
                                                    name="tahun" id="tahun"
                                                    value="{{ old('tahun') ?: $product_hukum->tahun }}">
                                                @error('tahun')
                                                    <div class="invalid-feedback">
                                                        <i class="bx bx-radio-circle"> {{ $message }}</i>
                                                    </div>
                                                @enderror
                                                <p class="small mt-2"><i>(Contoh: 2013)</i>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-12 mt-3">
                                            <div class="form-group mandatory">
                                                <label class="form-label " for="tempat_penetapan">Tempat Penetapan
                                                </label>
                                                <input class="form-control @error('tempat_penetapan') is-invalid @enderror"
                                                    type="text" placeholder="Tempat Penetapan..."
                                                    data-parsley-required="true" name="tempat_penetapan"
                                                    id="tempat_penetapan"
                                                    value="{{ old('tempat_penetapan') ?: $product_hukum->tempat_penetapan }}">
                                                @error('tempat_penetapan')
                                                    <div class="invalid-feedback">
                                                        <i class="bx bx-radio-circle"> {{ $message }}</i>
                                                    </div>
                                                @enderror
                                                <p class="small mt-2"><i>(Contoh: Jakarta)</i>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-12 mt-3">
                                            <div class="form-group mandatory">
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
                                                <p class="small mt-2"><i>(Contoh: 29 November 2013)</i>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-12 mt-3">
                                            <div class="form-group mandatory">
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
                                                <p class="small mt-2"><i>(Contoh: 29 November 2013)</i>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-12 mt-3">
                                            <div class="form-group mandatory">
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
                                                <p class="small mt-2"><i>(Contoh: 29 November 2013)</i>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-12 mt-3">
                                            <div class="form-group mandatory">
                                                <div class="form-group">
                                                    <label
                                                        class="form-label @error('category_hukum_id') is-invalid @enderror"
                                                        for="sumber">Bentuk Peraturan</label>
                                                    <a href="/admin/category-hukum-add" class="icon btn-primary mb-2"
                                                        title="Update Bentuk Peraturan">
                                                        <i class="bi bi-file-earmark-plus"></i>
                                                    </a>
                                                    <select
                                                        class="choices form-select @error('category_hukum_id') is-invalid @enderror"
                                                        name="category_hukum_id" data-parsley-required="true">
                                                        <option value="">Pilih Peraturan</option>
                                                        @foreach ($category_hukums as $category)
                                                            <option value="{{ $category->id }}"
                                                                @if (old('category_hukum_id') == $category->id) selected
                                                                @elseif (
                                                                    $product_hukum->categoryHukum &&
                                                                        old('category_hukum_id') == null &&
                                                                        old('category_hukum_id', $product_hukum->categoryHukum->id) == $category->id)
                                                                     selected @endif>
                                                                {{ $category->title }}
                                                            </option>
                                                        @endforeach
                                                    </select>


                                                    @error('category_hukum_id')
                                                        <div class="invalid-feedback">
                                                            <i class="bx bx-radio-circle"> {{ $message }}</i>
                                                        </div>
                                                    @enderror

                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-6 col-12 mt-3">
                                            <div class="form-group mandatory">
                                                <div class="form-group">
                                                    <label class="form-label " for="subjek">Subjek </label>
                                                    <a href="/admin/subjek-hukum-add" class="icon btn-primary mb-2"
                                                        title="Update Subjek Hukum">
                                                        <i class="bi bi-file-earmark-plus"></i>
                                                    </a>
                                                    <select
                                                        class="choices form-select multiple-remove @error('subjek') is-invalid @enderror"
                                                        multiple="multiple" name="subjek[]">
                                                        <option value="">Pilih subjek hukum</option>
                                                        <optgroup label="Figures">
                                                            @foreach ($subjek_hukums as $subjek)
                                                                <option value="{{ $subjek->id }}"
                                                                    @if (old('subjek')) @selected(true)
                                                            @elseif (isset($product_hukum->subjekHukums) && $product_hukum->subjekHukums->contains('id', $subjek->id))
                                                                @selected(true) @endif>
                                                                    {{ $subjek->nama }}
                                                                </option>
                                                            @endforeach

                                                        </optgroup>
                                                    </select>
                                                    @error('subjek[]')
                                                        <div class="invalid-feedback">
                                                            <i class="bx bx-radio-circle"> {{ $message }}</i>
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-12 mt-3">
                                            <div class="form-group mandatory">
                                                <label class="form-label" for="sumber">Sumber </label>
                                                <input class="form-control @error('sumber') is-invalid @enderror"
                                                    type="text" placeholder="Sumber" data-parsley-required="true"
                                                    name="sumber" id="sumber"
                                                    value="{{ old('sumber') ?: $product_hukum->sumber }}">
                                                @error('sumber')
                                                    <div class="invalid-feedback">
                                                        <i class="bx bx-radio-circle"> {{ $message }}</i>
                                                    </div>
                                                @enderror
                                                <p class="small mt-2"><i>(Contoh: LN 2013 (189) : 3 hlm. )</i>
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
                                                <p class="small mt-2"><i>(Contoh: BPK RI )</i>
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
                                                <p class="small mt-2"><i>(Contoh: Indonesia, BPK RI )</i>
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

                                            </div>
                                        </div>

                                        <div class="col-md-6 col-12 mt-3">
                                            <div class="form-group ">
                                                <label class="form-label" for="bidang">Bidang </label>
                                                <input class="form-control @error('bidang') is-invalid @enderror"
                                                    type="text" placeholder="Bidang" name="bidang" id="bidang"
                                                    value="{{ old('bidang') ?: $product_hukum->bidang }}">
                                                @error('bidang')
                                                    <div class="invalid-feedback">
                                                        <i class="bx bx-radio-circle"> {{ $message }}</i>
                                                    </div>
                                                @enderror

                                            </div>
                                        </div>

                                        {{-- status Hukum --}}
                                        <div class="mt-5"></div>
                                        <div class="mt-2">
                                            <h4 class="card-title"><b>Status Hukum</b></h4>
                                        </div>
                                        <div class="col-md-6 col-12 mt-3">
                                            <div class="form-group ">
                                                <label class="form-label" for="sumber">Mengubah </label>
                                                <div class="form-group">
                                                    <select class="choices form-select" name="mengubah">
                                                        <option value="">Pilih Hukum</option>
                                                        @foreach ($product_hukums as $produk)
                                                            <option value="{{ $produk->id }}">{{ $produk->nama }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12 mt-3">
                                            <div class="form-group ">
                                                <label class="form-label" for="sumber">Diubah </label>
                                                <div class="form-group">
                                                    <select class="choices form-select" name="diubah">
                                                        <option value="">Pilih Hukum</option>
                                                        @foreach ($product_hukums as $produk)
                                                            <option value="{{ $produk->id }}">{{ $produk->nama }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12 mt-3">
                                            <div class="form-group ">
                                                <label class="form-label" for="sumber">Mencabut </label>
                                                <div class="form-group">
                                                    <select class="choices form-select" name="mencabut">
                                                        <option value="">Pilih Hukum</option>
                                                        @foreach ($product_hukums as $produk)
                                                            <option value="{{ $produk->id }}">{{ $produk->nama }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12 mt-3">
                                            <div class="form-group ">
                                                <label class="form-label" for="sumber">Dicabut </label>
                                                <div class="form-group">
                                                    <select class="choices form-select" name="dicabut">
                                                        <option value="">Pilih Hukum</option>
                                                        @foreach ($product_hukums as $produk)
                                                            <option value="{{ $produk->id }}">{{ $produk->nama }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-12 mt-3">
                                            <div class="form-group ">
                                                <label class="form-label" for="sumber">Mencabut </label>
                                                <div class="form-group">
                                                    <select class="choices form-select" name="mencabut">
                                                        <option value="">Pilih Hukum</option>
                                                        @foreach ($product_hukums as $produk)
                                                            <option value="{{ $produk->id }}">{{ $produk->nama }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-12 col-12 mt-3">
                                            <div class="form-group ">
                                                <label class="form-label" for="sumber">File Old </label>
                                                <div class="form-group">

                                                    @if ($product_hukum->file != '')
                                                    <a href="{{ asset('storage/' . $product_hukum->file) }}">lihat produk hukum</a>
                                                        
                                                        @else
                                                            <img src="" alt="Image Not Found">
                                                    @endif

                                                </div>
                                            </div>
                                        </div>

                                        <div class=" col-12 mt-3 mt-4">
                                            <div class="form-group ">
                                                <input type="file" class="form-control form-control-sm"
                                                    image-crop-aspect-ratio="1:1" name="file"
                                                    class="@error('file') is-invalid @enderror">
                                                @error('file')
                                                    <div class="invalid-feedback">
                                                        <i class="bx bx-radio-circle"> {{ $message }}</i>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12 mt-3">
                                            <div class='form-group'>
                                                <div class="form-check mandatory">
                                                    <input type="checkbox" id="checkbox5" name="persetujuan"
                                                        class='form-check-input' checked data-parsley-required="true"
                                                        data-parsley-error-message="You have to accept our terms and conditions to proceed.">
                                                    <label for="checkbox5" class="form-check-label form-label">I
                                                        accept these terms and conditions.
                                                </div>
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
