
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
                    <p>{{ optional($detailHukum->abstrakHukum)->title ?? '' }}</p>
                    <p>{{ $detailHukum->tahun ?? '' }}</p>
                    <p>{{ strtoupper(optional($detailHukum->categoryHukum)->title ?? '' . ' NO ' . $detailHukum->nomor ?? '' . optional($detailHukum)->sumber ?? '') }}
                    </p>
                    <p>
                        {{ strtoupper(optional($detailHukum)->deskripsi ?? '') }}
                    </p>
                    <div>
                        <h5>ABSTRAK:</h5>
                        <div>
                            <ul>
                                @if($detailHukum->abstrakHukum)
                                    @foreach (explode("\n", $detailHukum->abstrakHukum->abstrak ?? '') as $point)
                                        <li>{{ $point }}</li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                        <div>
                            <h5>CATATAN:</h5>
                            <p>
                            <ul>
                                @if($detailHukum->abstrakHukum)
                                    @foreach (explode("\n", $detailHukum->abstrakHukum->catatam ?? '') as $point)
                                        <li>{{ $point }}</li>
                                    @endforeach
                                @endif
                            </ul>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>