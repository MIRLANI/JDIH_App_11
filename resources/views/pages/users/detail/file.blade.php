<div class="card my-3 p-2 p-2">
    <div class="card-body d-flex justify-content-between align-items-center" style="border-radius: 2000px; color: black;">
        <div class="d-flex align-items-center">
            <i class="bi bi-file-earmark-pdf-fill me-3 mb-4" style="font-size: 24px;"></i>
            <h6 class="mb-0">FILE-FILE PERATURAN</h6>
        </div>
    </div>
    <hr class="mt-0 mx-auto" style="width: 95%;">
    <div class="card-body">
        <div class="d-flex justify-content-evenly">
            <div class="card " style="background-color: #e3f2fd; width: 48%; margin-right: 1%;">
                <div class="card-body" style="color: #343a40;">
                    {{-- @dd($produkHukum) --}}
                    <span style="font-size: 15px;"><strong>Views: </strong>{{ $produkHukum->review ?? '0' }}</span>
                </div>
            </div>
            <div class="card" style="background-color: #fce4ec; width: 48%; margin-left: 1%;">
                <div class="card-body" style="color: #343a40;">
                    <span style="font-size: 15px;"><strong>Downloads: </strong>
                        {{ $produkHukum->download ?? '0' }}</span>
                </div>
            </div>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="pdfModal" tabindex="-1" aria-labelledby="pdfModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header p-4">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Tampilkan file PDF disini -->
                        @if ($produkHukum->id && $produkHukum->file)
                            <iframe id="pdfIframe" style="width: 100%; height: 800px;" src=""
                                data-src="{{ route('review', ['id' => $produkHukum->id, 'file' => $produkHukum->file]) }}#toolbar=0"></iframe>
                        @endif
                    </div>
                </div>
            </div>
        </div>



        <div class="d-flex justify-content-center  gap-5">
            @if ($produkHukum->file && $produkHukum->id)
                <button type="button" class="btn btn-primary px-4" data-bs-toggle="modal" data-bs-target="#pdfModal"
                    onclick="document.getElementById('pdfIframe').src = document.getElementById('pdfIframe').getAttribute('data-src')">
                    <i class="bi bi-eye-fill me-2"></i>Preview
                </button>
                <a href="{{ route('download', ['id' => $produkHukum->id, 'file' => $produkHukum->file]) }}"
                    class="btn btn-primary px-4">
                    <i class="bi bi-download me-2"></i>Download
                </a>
            @else
                <button disabled class="btn btn-primary px-4">
                    <i class="bi bi-eye-fill me-2"></i>Preview
                </button>
                <button disabled class="btn btn-primary px-4">
                    <i class="bi bi-download me-2"></i>Download
                </button>
            @endif
        </div>
    </div>
</div>
