<div class="card my-3 p-2 ">
    <div class="card-body d-flex justify-content-between align-items-center" style="border-radius: 2000px; color: black;">
        <div class="d-flex align-items-center">
            <i class="bi mb-4 bi-info-square-fill me-3 align-self-center" style="font-size: 24px;"></i>
            <h6 class="mb-0 align-self-center">STATUS PERATURAN</h6>
        </div>
    </div>
    <hr class="mt-0 mx-auto" style="width: 90%;">
    <div class="card-body mx-2">
        @php
            $statusHukum = json_decode($produkHukum->status_hukum, true);
            $statusKeys = ['mengubah', 'diubah', 'mencabut', 'dicabut'];
        @endphp
        @foreach ($statusKeys as $statusKey)
            @if (isset($statusHukum[$statusKey]) && !empty($statusHukum[$statusKey]) && is_array($statusHukum[$statusKey]))
                <p style="background-color: #f0f8ff;" class="p-2">{{ ucfirst($statusKey) }}</p>
                <ol style="list-style-type: lower-alpha;">
                    @foreach ($statusHukum[$statusKey] as $statusId)
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

    </div>
</div>
