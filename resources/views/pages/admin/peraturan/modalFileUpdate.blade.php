<div class="modal fade" id="pdfModal" tabindex="-1"
aria-labelledby="pdfModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
        <div class="modal-header p-4">
            <button type="button" class="btn-close" data-bs-dismiss="modal"
                aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <!-- Tampilkan file PDF disini -->
            @if ($product_hukum->id && $product_hukum->file)
                <iframe id="pdfIframe" style="width: 100%; height: 800px;"
                    src=""
                    data-src="{{ route('review', ['id' => $product_hukum->id, 'file' => $product_hukum->file]) }}#toolbar=0"></iframe>
            @endif
        </div>
    </div>
</div>
</div>


