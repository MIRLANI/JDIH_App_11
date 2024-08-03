<!-- Modal abstrak-->
<div class="modal fade text-left" id="modal-{{ $peraturan->id }}" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel17" aria-hidden="true">
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

                    <p>{{ optional($peraturan->abstrak)->title ?? '' }}</p>
                    <p>{{ $peraturan->tahun->tahun ?? '' }}</p>
                    <p>{{ strtoupper(optional($peraturan->ketegori)->title ?? ('' . ' NO ' . $peraturan->nomor ?? ('' . optional($peraturan)->sumber ?? ''))) }}
                    </p>
                    <p>
                        {{ strtoupper(optional($peraturan)->deskripsi ?? '') }}
                    </p>
                    <div>
                        <h5>ABSTRAK:</h5>
                        <div>
                            <ul>
                                @if ($peraturan->abstrak)
                                    @foreach (explode("\n", $peraturan->abstrak->abstrak ?? '') as $point)
                                        <li>{{ $point }}</li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                        <div>
                            <h5>CATATAN:</h5>
                            <p>
                            <ul>
                                @if ($peraturan->abstrak)
                                    @foreach (explode("\n", $peraturan->abstrak->catatam ?? '') as $point)
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



<!-- Modal review dokumen -->

<div class="modal fade" id="modalpdf-{{ $peraturan->id }}" tabindex="-1" aria-labelledby="pdfModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header p-4">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Tampilkan file PDF disini -->
                @if ($peraturan->id && $peraturan->file)
                    <iframe id="pdfIframe-{{ $peraturan->id }}" style="width: 100%; height: 800px;" src="" data-src="{{ route('review', ['id' => $peraturan->id, 'file' => $peraturan->file]) }}#toolbar=0"></iframe>
                @endif
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var modal = document.getElementById('modalpdf-{{ $peraturan->id }}');
        modal.addEventListener('show.bs.modal', function () {
            var iframe = document.getElementById('pdfIframe-{{ $peraturan->id }}');
            iframe.src = iframe.getAttribute('data-src');
        });
    });
</script>
