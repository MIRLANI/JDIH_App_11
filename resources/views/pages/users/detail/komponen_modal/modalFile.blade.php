
<div class="modal fade" id="pdfModal" tabindex="-1" aria-labelledby="modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header p-4">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Tampilkan file PDF disini -->
                @if ($peraturan->id && $peraturan->file)
                    <iframe id="pdfIframe-{{ $peraturan->id }}" style="width: 100%; height: 800px;"
                        src="{{ route('review', ['id' => $peraturan->id, 'file' => $peraturan->file]) }}#toolbar=0"></iframe>
                @endif
            </div>
        </div>
    </div>
</div>

