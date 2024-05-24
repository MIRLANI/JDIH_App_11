<div class="card my-3 p-2">
    <div class="card-body d-flex justify-content-between align-items-center" style="border-radius: 2000px; color: black;">
        <div class="d-flex align-items-center">
            <i class="bi mb-4 bi-bookmark-fill me-3 align-self-center" style="font-size: 24px;"></i>
            <h6 class="mb-0 align-self-center">MATERI POKOK PERATURAN</h6>
        </div>
        <button type="button" data-bs-toggle="modal" data-bs-target="#large" class="btn btn-primary px-4">Abstrak</button>
    </div>
    <hr class="mt-0 mx-auto" style="width: 95%;">
    <div class="card-body mx-2">


        <p> {{ optional($detailHukum->abstrakHukum)->materi_pokok }}
        </p>
    </div>
</div>



<!-- Modal -->
<div class="modal fade text-left" id="large" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel17">ABSTRAK PERATURAN</h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body">
                <div>
                    <p>{{ optional($detailHukum->abstrakHukum)->title }}</p>
                    <p>{{ $detailHukum->tahun ?? '' }}</p>
                    <p>{{ strtoupper(optional($detailHukum->categoryHukum)->title . ' NO ' . $detailHukum->nomor ?? '' . optional($detailHukum)->sumber) }}
                    </p>
                    <p>
                        {{ strtoupper(optional($detailHukum)->deskripsi) }}
                    </p>
                    <div>
                        <h5>ABSTRAK:</h5>
                        <div>
                            <ul>

                                @foreach (explode("\n", optional($detailHukum->abstrakHukum)->abstrak) as $point)
                                    <li>{{ $point }}</li>
                                @endforeach

                            </ul>
                        </div>
                        <div>
                            <h5>CATATAN:</h5>
                            <p>
                            <ul>
                                @foreach (explode("\n", optional($detailHukum->abstrakHukum)->catatam) as $point)
                                    <li>{{ $point }}</li>
                                @endforeach
                            </ul>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
