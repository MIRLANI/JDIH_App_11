<section class="row">
    <div class="col-12 col-lg-12">
        <div class="row">
            <div class="col-12 col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-body px-5 py-4-5">
                        <div class="row">
                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                <div class="stats-icon purple mb-2">
                                    <i class="iconly-boldPaper"></i>
                                </div>
                            </div>
                          
                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                <h6 class="text-muted font-semibold">Total Peraturan</h6>
                                <h6 class="font-extrabold mb-0">{{ $jmlPeraturan->count() }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body px-5 py-4-5">
                        <div class="row">
                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                <div class="stats-icon purple mb-2">
                                    <i class="bi bi-download"></i> <!-- added icon -->
                                </div>
                            </div>
                          
                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                <h6 class="text-muted font-semibold">Total Download</h6>
                                <h6 class="font-extrabold mb-0">{{ $jmlDownload }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body px-5 py-4-5">
                        <div class="row">
                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                <div class="stats-icon purple mb-2">
                                    <i class="bi bi-eye-fill"></i><!-- added icon -->
                                </div>
                            </div>
                          
                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                <h6 class="text-muted font-semibold">Total Review</h6>
                                <h6 class="font-extrabold mb-0">{{ $jmlReview }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             
            <div class="col-12 col-lg-6 col-md-12">
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