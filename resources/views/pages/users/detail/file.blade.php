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
                    <span style="font-size: 15px;"><strong>Downloads: </strong> {{ $produkHukum->download ?? '0' }}</span>
                </div>
            </div>
        </div>

       

        <div class="d-flex justify-content-center  gap-5">
            @if($produkHukum->file && $produkHukum->id)
                <a href="{{ route("review", ['id' => $produkHukum->id, 'file' => $produkHukum->file]) }}" target="_blank" class="btn btn-primary px-4">
                    <i class="bi bi-eye-fill me-2"></i>Preview
                </a>
                <a href="{{ route('download', ['id' => $produkHukum->id, 'file' => $produkHukum->file]) }}" class="btn btn-primary px-4">
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
