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







<div class="col-11 my-5">
    <h4 class="fw-bold text-center">PENCARIAN PERATURAN</h4>
    <p class="mb-0 text-center">Kriteria: Tentang: <strong>{{ request()->get('keyword') }}</strong></p>
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
                            style="color: gray;">{{ $hukum->subjekHukums->isNotEmpty() ? implode(', ', $hukum->subjekHukums->pluck('nama')->toArray()) : '' }}</span>
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
                                    $produkStatus = \App\Models\ProductHukum::query()->find($statusId);
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
                <div class="d-flex justify-content-between align-items-center mx-1">
                    <div class="d-flex align-items-center">
                        @if ($hukum->file)
                            <a class="btn btn-light-secondary px-2 mx-1"
                                href="{{ route('download', ['id' => $hukum->id, 'file' => $hukum->file]) }}"
                                title="Download">Download
                                <i class="bi bi-download"></i>
                            </a>
                            <a class="btn btn-light-secondary px-2 mx-1"
                                href="{{ route('review', ['id' => $hukum->id, 'file' => $hukum->file]) }}"
                                target="_blank">Review
                                <i class="bi bi-eye"></i>
                            </a>
                        @else
                            <button class="btn btn-light-secondary px-2 mx-1 disabled" title="Download"
                                disabled>Download
                                <i class="bi bi-download"></i>
                            </button>
                            <button class="btn btn-light-secondary px-2 mx-1 disabled" disabled>Review
                                <i class="bi bi-eye"></i>
                            </button>
                        @endif
                    </div>
                    <button type="button" class="btn btn-light-secondary px-4" data-bs-toggle="modal"
                    data-bs-target="#modal-{{ $hukum->id }}">Abstrak</button>
                </div>
            </div>
        </div>
    @endforeach
@else
    <div class="alert alert-warning" role="alert">
        No products found.
    </div>
@endif



<div class="card-body text-center">
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center pagination-primary">
            @if ($produkHukum->currentPage() > 1)
                <li class="page-item mx-1">
                    <button class="page-link"
                        onclick="changePage('{{ $produkHukum->previousPageUrl() }}')">Prev</button>
                </li>
            @endif

            @foreach ($produkHukum->getUrlRange(1, $produkHukum->lastPage()) as $page => $url)
                <li class="page-item mx-1 {{ $produkHukum->currentPage() == $page ? 'active' : '' }}">
                    <button class="page-link" onclick="changePage('{{ $url }}')">{{ $page }}</button>
                </li>
            @endforeach

            @if ($produkHukum->currentPage() < $produkHukum->lastPage())
                <li class="page-item mx-1">
                    <button class="page-link" onclick="changePage('{{ $produkHukum->nextPageUrl() }}')">Next</button>
                </li>
            @endif
        </ul>
    </nav>
</div>
<script>
    function changePage(url) {
        window.history.pushState("", "", url);
        location.reload();
    }
</script>
