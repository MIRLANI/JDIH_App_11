
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
                    <p>{{ optional($produkHukum->abstrakHukum)->title ?? '' }}</p>
                    <p>{{ $produkHukum->tahun ?? '' }}</p>
                    <p>{{ strtoupper(optional($produkHukum->categoryHukum)->title ?? '' . ' NO ' . $produkHukum->nomor ?? '' . optional($produkHukum)->sumber ?? '') }}
                    </p>
                    <p>
                        {{ strtoupper(optional($produkHukum)->deskripsi ?? '') }}
                    </p>
                    <div>
                        <h5>ABSTRAK:</h5>
                        <div>
                            <ul>
                                @if($produkHukum->abstrakHukum)
                                    @foreach (explode("\n", $produkHukum->abstrakHukum->abstrak ?? '') as $point)
                                        <li>{{ $point }}</li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                        <div>
                            <h5>CATATAN:</h5>
                            <p>
                            <ul>
                                @if($produkHukum->abstrakHukum)
                                    @foreach (explode("\n", $produkHukum->abstrakHukum->catatam ?? '') as $point)
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