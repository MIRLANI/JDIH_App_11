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
                    {{-- @dd($peraturan) --}}
                    <span style="font-size: 15px;"><strong>Views: </strong>{{ $peraturan->review ?? '0' }}</span>
                </div>
            </div>
            <div class="card" style="background-color: #fce4ec; width: 48%; margin-left: 1%;">
                <div class="card-body" style="color: #343a40;">
                    <span style="font-size: 15px;"><strong>Downloads: </strong>
                        {{ $peraturan->download ?? '0' }}</span>
                </div>
            </div>
        </div>


        @isset($error)
            <div class="alert alert-danger">
                {{ $error }}
            </div>
        @endisset
        <div class="d-flex justify-content-center gap-3">

            {{-- kodisi kalau dokumennya di berikan password --}}
            @if (isset($peraturan->password->password_name) && isset($password) == false)
                <button type="button" class="btn btn-warning text-white" data-bs-toggle="modal"
                    data-bs-target="#passwordModal">
                    <i class="bi bi-lock-fill me-2"></i> Masukan password untuk melihat dokumen
                </button>
                @include('pages.users.detail.komponen_modal.password')
            @endif

            {{-- kodisi kalau passwordnya benar --}}
            @if (isset($peraturan->password->password_name) && isset($password) == true)
                @if ($peraturan->file && $peraturan->id)
                    <button type="button" class="btn btn-primary px-4" data-bs-toggle="modal"
                        data-bs-target="#pdfModal">
                        <i class="bi bi-eye-fill  me-2"></i>Preview
                    </button>
                    <a href="{{ route('download', ['id' => $peraturan->id, 'file' => $peraturan->file]) }}"
                        class="btn btn-primary px-4">
                        <i class="bi bi-download me-2"></i>Download
                    </a>
                    @include('pages.users.detail.komponen_modal.modalFile')
                @else
                    <button disabled class="btn btn-primary px-4">
                        <i class="bi bi-eye-fill me-2"></i>Preview
                    </button>
                    <button disabled class="btn btn-primary px-4">
                        <i class="bi bi-download me-2"></i>Download
                    </button>
                @endif

            @endif
            {{-- kodisi kalau tidak ada passwordnya --}}
            @if (!isset($peraturan->password->password_name))
                @if ($peraturan->file && $peraturan->id)
                    <button type="button" class="btn btn-primary px-4" data-bs-toggle="modal"
                        data-bs-target="#pdfModal">
                        <i class="bi bi-eye-fill me-2"></i>Preview
                    </button>
                    <a href="{{ route('download', ['id' => $peraturan->id, 'file' => $peraturan->file]) }}"
                        class="btn btn-primary px-4">
                        <i class="bi bi-download me-2"></i>Download
                    </a>
                    @include('pages.users.detail.komponen_modal.modalFile')
                @else
                    <button disabled class="btn btn-primary px-4">
                        <i class="bi bi-eye-fill me-2"></i>Preview
                    </button>
                    <button disabled class="btn btn-primary px-4">
                        <i class="bi bi-download me-2"></i>Download
                    </button>
                @endif
            @endif
        </div>
    </div>
</div>
