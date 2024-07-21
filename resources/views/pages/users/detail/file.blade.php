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
            <div class="modal-dialog modal-dialog-centered modal-lg"> <!-- Larger modal for better document display -->
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="pdfModalLabel">Dokumen Peraturan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Display PDF file here -->
                        @if ($produkHukum->id && $produkHukum->file)
                            <div id="pdfViewer" style="width: 100%; height: 80vh; overflow: auto;"></div> <!-- Viewer height adjusted for better readability -->
                            <script>
                                // Ensure PDF.js library is loaded
                                if (typeof pdfjsLib === "undefined") {
                                    var script = document.createElement('script');
                                    script.onload = function () {
                                        pdfjsLib.GlobalWorkerOptions.workerSrc = '//cdnjs.cloudflare.com/ajax/libs/pdf.js/2.6.347/pdf.worker.min.js';
                                        loadPDF();
                                    };
                                    script.src = '//cdnjs.cloudflare.com/ajax/libs/pdf.js/2.6.347/pdf.min.js';
                                    document.head.appendChild(script);
                                } else {
                                    loadPDF();
                                }

                                function loadPDF() {
                                    // Load PDF after modal is shown
                                    document.getElementById('pdfModal').addEventListener('shown.bs.modal', function () {
                                        var url = "{{ route('review', ['id' => $produkHukum->id, 'file' => $produkHukum->file]) }}";
                                        var loadingTask = pdfjsLib.getDocument(url);
                                        loadingTask.promise.then(function(pdf) {
                                            var numPages = pdf.numPages;
                                            var viewer = document.getElementById('pdfViewer');
                                            viewer.innerHTML = ''; // Clear previous PDF pages
                                            for (let pageNum = 1; pageNum <= numPages; pageNum++) {
                                                pdf.getPage(pageNum).then(function(page) {
                                                    var scale = 1.5; // Scale adjusted for better visibility
                                                    var viewport = page.getViewport({scale: scale});
                                                    var canvas = document.createElement('canvas');
                                                    var ctx = canvas.getContext('2d');
                                                    var renderContext = {
                                                        canvasContext: ctx,
                                                        viewport: viewport
                                                    };

                                                    canvas.height = viewport.height;
                                                    canvas.width = viewport.width;
                                                    viewer.appendChild(canvas);

                                                    page.render(renderContext).promise.then(function() {
                                                        // Add page number below each page
                                                        var pageNumberDiv = document.createElement('div');
                                                        pageNumberDiv.style.textAlign = 'center';
                                                        pageNumberDiv.textContent = 'Halaman ' + pageNum + ' dari ' + numPages; // Text changed to Indonesian
                                                        viewer.appendChild(pageNumberDiv);
                                                    });
                                                });
                                            }
                                        });
                                    });
                                }
                            </script>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center gap-3">
            @if ($produkHukum->file && $produkHukum->id)
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pdfModal">
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
