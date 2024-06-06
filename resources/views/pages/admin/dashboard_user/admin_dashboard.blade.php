<section class="row">
    <div class="col-12 col-lg-12">
        <div class="row">
            <div class="col-12 col-lg-3 col-md-6">
                <a href="{{ route('index.product_hukum') }}">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon purple mb-2">
                                        <i class="iconly-boldPaper"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Total Peraturan FMIPA</h6>
                                    <h6 class="font-extrabold mb-0">{{ $jmlPeraturan }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
             @if (Auth::user()->role == "admin")
             <div class="col-6 col-lg-3 col-md-6">
                <a href="{{ route('index.category_hukum') }}">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon blue mb-2">
                                        <i class="iconly-boldCategory"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Kategori Peraturan</h6>
                                    <h6 class="font-extrabold mb-0">{{ $jmlKatagori }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-3 col-md-6">
                <a href="{{ route('index.tipe_hukum') }}">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon green mb-2">
                                        <i class="iconly-boldDocument"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Sumber Peraturan</h6>
                                    <h6 class="font-extrabold mb-0">{{ $jmlTipe }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-3 col-md-6">
                <a href="{{ route('index.subjek_hukum') }}">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon red mb-2">
                                        <i >#</i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Tag</h6>
                                    <h6 class="font-extrabold mb-0">{{ $jmlTag }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
             @endif
       <div class="row">
          <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Status Peraturan</h4>
                </div>
                <div class="card-body">
                    <div id="status"></div>
                </div>
            </div>
          </div>
       </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Jumlah Peraturan Per Lima Tahun</h4>
                    </div>
                    <div class="card-body">
                        <div id="chart-profile-peraturan"></div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>
