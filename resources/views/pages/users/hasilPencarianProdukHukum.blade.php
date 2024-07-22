<section id="multiple-column-form" class="full-background"
    style=" background-image: url('{{ asset('images/fmipa_uho.jpg') }}'); background-size: cover; background-color: rgba(0,0,0,0.7); background-blend-mode: darken; background-position: center; background-attachment: fixed;">
    <div class="container">
        <div class="row match-height ">
            <div class="col-lg-9 col-md-8 col-sm-10 col-12 mx-auto  ">
                <div class="card" style="margin: 50px;">
                    <div class="card-content">
                        <div class="card-body">
                            @include('pages.users.searchForm')
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<div class="d-flex justify-content-center my-5">
    <div class="col-11 text-center">
        <h4 class="fw-bold mb-3">PENCARIAN PERATURAN</h4>
        <p class="mb-1">Kriteria Pencarian:</p>
        <div class="d-inline-block text-start">
            @foreach (['keyword' => 'Keyword', 'tentang' => 'Tentang', 'sumber' => 'Sumber', 'tahun' => 'Tahun', 'tag' => 'Tag'] as $key => $label)
                @if (request()->get($key))
                    <p class="mb-1">{{ $label }}:
                        <strong>{{ is_array(request()->get($key)) ? implode(', ', request()->get($key)) : request()->get($key) }}</strong>
                    </p>
                @endif
            @endforeach
        </div>
    </div>
</div>


@if ($produkHukum->isNotEmpty())
    @foreach ($produkHukum as $hukum)
        @include('pages.users.modalSearch')
        <div class="card w-75 mx-auto my-5 shadow">
            <div class="card-body">
                <div class="row align-items-center mx-1">
                    <div class="col-5 col-md-auto">
                        <i class="bi bi-file-earmark-text-fill mb-3 me-3" style="font-size:100px;"></i>
                    </div>
                    <div class="col-12 col-md mt-3">
                        <h6 class="mb-4">{{ $hukum->nama }}</h6>
                        <a href="{{ route('detail', ['id' => $hukum->id, 'slug' => $hukum->slug]) }}"
                            style="font-size: 25px; color: black;" onmouseover="this.style.color='#4A90E2'"
                            onmouseout="this.style.color='#333'">{{ Str::limit($hukum->deskripsi, 100) }}</a>
                        <span class="d-block mt-2"
                            style="color: gray;">{{ $hukum->tagPeraturans->isNotEmpty() ? implode(', ', $hukum->tagPeraturans->pluck('nama')->toArray()) : '' }}</span>
                    </div>
                </div>
                <hr class="my-2">
                <h6 class="mb-2">Status Peraturan:</h6>
                @php
                    $hukum_status = json_decode($hukum->status_hukum, true);
                    $statusKeys = ['mengubah', 'diubah', 'mencabut', 'dicabut'];
                @endphp
                @foreach ($statusKeys as $statusKey)
                    @if (isset($hukum_status[$statusKey]) && !empty($hukum_status[$statusKey]) && is_array($hukum_status[$statusKey]))
                        <p style="background-color: #f0f8ff; padding: 0.1em; display: inline-block;">
                            {{ ucfirst($statusKey) }}</p>
                        <ol style="list-style-type: lower-alpha;">
                            @foreach ($hukum_status[$statusKey] as $statusId)
                                @php
                                    $produkStatus = \App\Models\Peraturan::query()->find($statusId);
                                @endphp
                                @if ($produkStatus)
                                    <li>
                                        <a
                                            href="{{ route('detail', ['id' => $produkStatus->id, 'slug' => $produkStatus->slug]) }}">
                                            <span style="color: red;">{{ $produkStatus->nama }}</span>
                                        </a>
                                        {{ $produkStatus->deskripsi }}
                                    </li>
                                @endif
                            @endforeach
                        </ol>
                    @endif
                @endforeach
                <hr class="my-2">
                <div class="d-flex justify-content-between align-items-center mx-1 flex-wrap">
                    <div class="d-flex align-items-center mb-2 mb-md-0">
                        @if ($hukum->file)
                            <a class="btn btn-primary d-flex align-items-center me-2 flex-grow-1 flex-md-grow-0"
                                href="{{ route('download', ['id' => $hukum->id, 'file' => $hukum->file]) }}"
                                title="Download">
                                <i class="bi bi-download pb-4 me-2"></i>
                                <span>Download</span>
                            </a>

                            <button type="button"
                                class="btn btn-primary d-flex align-items-center flex-grow-1 flex-md-grow-0"
                                data-bs-toggle="modal" data-bs-target="#modalpdf-{{ $hukum->id }}" onclick="document.getElementById('pdfIframe').src = document.getElementById('pdfIframe').getAttribute('data-src')">
                                <i class="bi bi-eye-fill pb-4 me-2"></i>
                                <span>Preview</span>
                            </button>
                        @else
                            <a class="btn btn-primary d-flex align-items-center me-2 flex-grow-1 flex-md-grow-0 disabled"
                                href="#"
                                title="Download">
                                <i class="bi bi-download pb-4 me-2"></i>
                                <span>Download</span>
                            </a>

                            <button type="button"
                                class="btn btn-primary d-flex align-items-center flex-grow-1 flex-md-grow-0 disabled"
                                data-bs-toggle="modal" data-bs-target="#modalpdf-{{ $hukum->id }}" disabled>
                                <i class="bi bi-eye-fill pb-4 me-2"></i>
                                <span>Preview</span>
                            </button>
                        @endif
                    </div>
                    <div class="d-flex align-items-center mb-2 mb-md-0">
                        <button type="button"
                            class="btn btn-light-secondary px-2 mx-1 d-flex align-items-center justify-content-center"
                            data-bs-toggle="modal" data-bs-target="#modal-{{ $hukum->id }}"
                            style="width: 100%; max-width: 200px;">
                            <i class="bi bi-info-circle pb-4 me-2"></i> <span>Abstrak</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@else
    <div class="alert alert-warning text-center mx-auto my-3" role="alert" style="max-width: 600px; font-size: 1rem;">
        <i class="bi bi-exclamation-triangle-fill me-2" style="font-size: 1.2rem;"></i>
        Data tidak ditemukan
    </div>
@endif



{{-- kodisi pagination --}}
@if ($produkHukum->total() > 5)
    <div class="card-body text-center">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center pagination-primary">
                @if ($produkHukum->previousPageUrl())
                    <li class="page-item mx-1">
                        <a class="page-link" href="{{ $produkHukum->previousPageUrl() }}">Prev</a>
                    </li>
                @endif

                @foreach ($produkHukum->getUrlRange(1, $produkHukum->lastPage()) as $page => $url)
                    @if ($page >= $produkHukum->currentPage() - 2 && $page <= $produkHukum->currentPage() + 2)
                        <li class="page-item mx-1 {{ $produkHukum->currentPage() == $page ? 'active' : '' }}">
                            <a class="page-link" href="{{ $url }}"
                                data-url="{{ $url }}">{{ $page }}</a>
                        </li>
                    @endif
                @endforeach

                @if ($produkHukum->nextPageUrl())
                    <li class="page-item mx-1">
                        <a class="page-link" href="{{ $produkHukum->nextPageUrl() }}">Next</a>
                    </li>
                @endif
            </ul>
        </nav>
    </div>
@endif
