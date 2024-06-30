@extends('layouts.admin')

@section('title', 'JDIH | Tambah Peraturan')

@section('content')


    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 mt-3 col-md-6 order-md-1 order-last">
                    <h3>Tambah Peraturan</h3>
                    <p class="text-subtitle text-muted">Tambahkan peraturan baru ke dalam sistem.</p>
                </div>
                <div class="col-12 mt-3 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tambah Peraturan</li>
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

                        <div class="card-content">
                            <div class="card-body m-2">
                                <form class="form" action="{{ route('store.product_hukum') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="mt-2">
                                            <h4 class="card-title"><b>Peraturan</b></h4>
                                        </div>
                                        <div class="col-md-6 col-12 mt-3">
                                            <div class="form-group mandatory">
                                                <label class="form-label" for="nama">Nama Peraturan: </label>
                                                <input class="form-control @error('nama') is-invalid @enderror"
                                                    type="text" placeholder="Nama Peraturan" data-parsley-required="true"
                                                    name="nama" id="nama"
                                                    value="{{ old('nama') ?: session('nama') }}">
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
                                                    placeholder="Deskripsi" name="deskripsi" id="deskripsi"
                                                    value="{{ old('deskripsi') ?: session('deskripsi') }}"
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
                                        <div class="mt-2">
                                            <h4 class="card-title"><b>Meta Data</b></h4>
                                        </div>
                                        <div
                                            class="col-md-6 col-12 {{ Auth::user()->role == 'admin prodik' ? 'col-md-12' : 'col-md-6' }}  mt-3">
                                            <div class="form-group mandatory">
                                                <label for="judul" class="form-label">Judul </label>
                                                <input type="text" id="judul"
                                                    class="form-control @error('judul') is-invalid @enderror" name="judul"
                                                    placeholder="Judul" value="{{ old('judul') ?: session('judul') }}"
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
                                                    value="{{ old('nomor') ?: session('nomor') }}"
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
                                                    <select id="sumber"
                                                        class="form-control @error('tipe_id') is-invalid @enderror"
                                                        name="tipe_id">
                                                        <option value="">Pilih Sumber Peraturan</option>
                                                        @foreach ($tipeHukums as $tipe)
                                                            <option value="{{ $tipe->id }}"
                                                                {{ old('tipe_id') == $tipe->id ? 'selected' : '' }}>
                                                                {{ $tipe->nama }}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('tipe_id')
                                                        <div class="invalid-feedback">
                                                            <i class="bx bx-radio-circle"> {{ $message }}</i>
                                                        </div>
                                                    @enderror
                                                    <p class="small mt-2"><i>(Contoh: Peraturan Dekan)</i>
                                                    </p>
                                                </div>
                                            </div>
                                        @else
                                            @if ($tipeHukums)
                                                <input type="hidden" name="tipe_id" value="{{ $tipeHukums->id }}">
                                            @endif
                                        @endif

                                        
                                        <div class="col-md-6 col-12 mt-3">
                                            <div class="form-group mandatory">
                                                <label class="form-label" for="tahun">Tahun </label>
                                                <select id="tahun"
                                                    class="form-control @error('tahun') is-invalid @enderror"
                                                    name="tahun_id">
                                                    <option value="">Pilih Tahun</option>
                                                    @foreach ($tahuns as $tahun)
                                                        <option value="{{ $tahun->id }}"
                                                            {{ old('tahun') == $tahun->tahun ? 'selected' : '' }}>
                                                            {{ $tahun->tahun }}</option>
                                                    @endforeach
                                                </select>

                                                @error('tahun_id')
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
                                                    <label
                                                        class="form-label @error('category_hukum_id') is-invalid @enderror"
                                                        for="sumber">Kategori Peraturan</label>
                                                       
                                                    <a href="{{ route('index.category_hukum') }}"
                                                        class="icon btn-primary mb-2" title="Tambah Bentuk Peraturan">
                                                        <i class="bi bi-file-earmark-plus"></i>
                                                    </a>
                                                    
                                                    <select
                                                        class="form-control @error('category_hukum_id') is-invalid @enderror"
                                                        name="category_hukum_id" data-parsley-required="true">
                                                        <option value="">Pilih Kategori Peraturan</option>
                                                        @foreach ($category_hukums as $category)
                                                            <option value="{{ $category->id }}"
                                                                @if (old('category_hukum_id') == $category->id) selected @endif>
                                                                {{ $category->title }}</option>
                                                        @endforeach
                                                    </select>

                                                    @error('category_hukum_id')
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
                                                    
                                                        <a href="{{ route('index.subjek_hukum') }}"
                                                            class="icon btn-primary mb-2" title="Tambah Subjek Hukum">
                                                            <i class="bi bi-file-earmark-plus"></i>
                                                        </a>

                                                    <select
                                                        class="choices form-select multiple-remove @error('subjek') is-invalid @enderror"
                                                        multiple="multiple" name="subjek[]">
                                                        <optgroup label="Figures">
                                                            <option value="">Pilih Tag Dokumen </option>
                                                            @foreach ($subjek_hukums as $subjek)
                                                                <option value="{{ $subjek->id }}"
                                                                    @if (old('subjek') && in_array($subjek->id, old('subjek'))) selected @endif>
                                                                    {{ $subjek->nama }}</option>
                                                            @endforeach
                                                        </optgroup>

                                                    </select>

                                                    @error('subjek')
                                                        <div class="invalid-feedback">
                                                            <i class="bx bx-radio-circle"> {{ $message }}</i>
                                                        </div>
                                                    @enderror

                                                    <p class="small mt-2"><i>(Contoh: Buku, Modul)</i>
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
                                                    value="{{ old('tempat_penetapan') ?: session('tempat_penetapan') }}">
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
                                            <div class="form-group ">
                                                <label class="form-label" for="sumber">Jumlah Halaman </label>
                                                <input class="form-control @error('sumber') is-invalid @enderror"
                                                    type="text" placeholder="Jumlah Halaman" data-parsley-required="true"
                                                    name="sumber" id="sumber"
                                                    value="{{ old('sumber') ?: session('sumber') }}">
                                                @error('sumber')
                                                    <div class="invalid-feedback">
                                                        <i class="bx bx-radio-circle"> {{ $message }}</i>
                                                    </div>
                                                @enderror
                                                <p class="small mt-2"><i>(Contoh: 5 Halaman. )</i>
                                                </p>
                                            </div>
                                        </div>

                                       

                                        <div class="col-md-6 col-12 mt-3">
                                            <div class="form-group mandatory">
                                                <label class="form-label" for="bahasa">Bahasa </label>
                                                <fieldset class="form-group ">
                                                    <select class="form-select @error('bahasa') is-invalid @enderror"
                                                        name="bahasa" id="basicSelect">
                                                        <option value="indonesia">Indonesia</option>
                                                        <option value="inggris">Inggris</option>
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
                                                    value="{{ old('lokasi') ?: session('lokasi') }}">
                                                @error('lokasi')
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
                                                <label class="form-label" for="teu">T.E.U. </label>
                                                <input class="form-control  @error('teu') is-invalid @enderror"
                                                    type="text" placeholder="T.E.U" name="teu" id="teu"
                                                    value="{{ old('teu') ?: session('teu') }}"
                                                    data-parsley-required="true">
                                                @error('teu')
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
                                                <label class="form-label " for="sumber">Status </label>
                                                <fieldset class="form-group">
                                                    <select class="form-select @error('status') is-invalid @enderror"
                                                        id="basicSelect" name="status">
                                                        <option value="berlaku">Berlaku</option>
                                                        <option value="tidak berlaku">Tidak Berlaku</option>
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
                                                    value="{{ old('tanggal_penetapan') ?: session('tanggal_penetapan') }}">
                                                @error('tanggal_penetapan')
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
                                                <label class="form-label " for="tanggal_pengundangan">Tanggal Pengundangan
                                                </label>
                                                <input
                                                    class="form-control @error('tanggal_pengundangan') is-invalid @enderror"
                                                    type="date" placeholder="Tanggal Pengundangan"
                                                    data-parsley-required="true" name="tanggal_pengundangan"
                                                    id="tanggal_pengundangan"
                                                    value="{{ old('tanggal_pengundangan') ?: session('tanggal_pengundangan') }}">
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
                                                    value="{{ old('tanggal_berlaku') ?: session('tanggal_berlaku') }}">
                                                @error('tanggal_berlaku')
                                                    <div class="invalid-feedback">
                                                        <i class="bx bx-radio-circle"> {{ $message }}</i>
                                                    </div>
                                                @enderror
                                                <p class="small mt-2"><i>(Contoh: 29 Mei 2024)</i>
                                                </p>
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
                                                <select
                                                    class="choices form-select multiple-remove @error('status') is-invalid @enderror"
                                                    multiple="multiple" name="status_hukum[mengubah][]">
                                                    <option value="">Pilih Hukum</option>
                                                    @foreach ($product_hukums as $produk)
                                                        <option value="{{ $produk->id }}" @selected(in_array($produk->id, old('status_hukum.mengubah', $statusHukum['mengubah'] ?? [])))>
                                                            {{ $produk->nama }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('status')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12 mt-3">
                                            <div class="form-group ">
                                                <label class="form-label" for="sumber">Diubah </label>
                                                <select
                                                    class="choices form-select multiple-remove @error('status') is-invalid @enderror"
                                                    multiple="multiple" name="status_hukum[diubah][]">
                                                    <option value="">Pilih Hukum</option>
                                                    @foreach ($product_hukums as $produk)
                                                        <option value="{{ $produk->id }}" @selected(in_array($produk->id, old('status_hukum.diubah', $statusHukum['diubah'] ?? [])))>
                                                            {{ $produk->nama }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('status')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12 mt-3">
                                            <div class="form-group ">
                                                <label class="form-label" for="sumber">Mencabut </label>
                                                <select
                                                    class="choices form-select multiple-remove @error('status') is-invalid @enderror"
                                                    multiple="multiple" name="status_hukum[mencabut][]">
                                                    <option value="">Pilih Hukum</option>
                                                    @foreach ($product_hukums as $produk)
                                                        <option value="{{ $produk->id }}" @selected(in_array($produk->id, old('status_hukum.mencabut', $statusHukum['mencabut'] ?? [])))>
                                                            {{ $produk->nama }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('status')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12 mt-3">
                                            <div class="form-group ">
                                                <label class="form-label" for="sumber">Dicabut </label>
                                                <select
                                                    class="choices form-select multiple-remove @error('status') is-invalid @enderror"
                                                    multiple="multiple" name="status_hukum[dicabut][]">
                                                    <option value="">Pilih Hukum</option>
                                                    @foreach ($product_hukums as $produk)
                                                        <option value="{{ $produk->id }}" @selected(in_array($produk->id, old('status_hukum.dicabut', $statusHukum['dicabut'] ?? [])))>
                                                            {{ $produk->nama }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('status')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
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
                                    </div>

                                    <div class="row">
                                        <div class="col-12 mt-3 d-flex  justify-content-end">
                                            <button class="btn btn-primary me-3 mb-1">Submit</button>
                                            <button type="reset"
                                                class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                        </div>
                                    </div>
                                    <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>

@endsection
