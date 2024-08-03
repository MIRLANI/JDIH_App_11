<div class="card w-75 contoh start-50 translate-middle-x mb-5"
    style="margin-top: 70px; z-index: 10; background-color: #E8F0FE;">
    <div class="card-body" style="border-radius: 2000px;">
        <h4 class="card-title" style="color: #333;">PERATURAN TERBARU</h4>
        <div class="row">
            @foreach ($peraturanTerbarus as $produk)
                <div class="col-md-6">
                    <div class="card"
                        style="margin: 10px; background-color: #FFFFFF; border-radius: 20px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2">
                                    <i class="bi bi-file-earmark-text" style="font-size: 48px; color: #4A90E2;"></i>
                                </div>
                                <div class="col-md-10">
                                    <h6 style="margin-bottom: 0;"> <a
                                            href="{{ route('detail', ['id' => $produk->id, 'slug' => $produk->slug]) }}"
                                            style="font-size: larger; color: #333; transition: color 0.3s;"
                                            onmouseover="this.style.color='#4A90E2'"
                                            onmouseout="this.style.color='#333'">{{ $produk->nama }}</a> </h6>
                                    <p style="margin-top: 3px; color: #666;">{{ \Illuminate\Support\Str::words($produk->deskripsi, 12) }}</p>
                                </div>
                                <hr style="border-top: 1px solid #ccc; margin-top: 10px; margin-bottom: 10px;">
                                <div class="d-flex justify-content-around mt-2">
                                    <span class="text-muted small">Dibuat pada
                                        <strong>{{ $produk->created_at->format('d M Y') }}</strong></span>
                                    <span class="text-muted small">Diunduh <strong
                                            class="text-danger">{{ $produk->download ?? 0 }} kali</strong></span>
                                    <span class="text-muted small">Dilihat <strong
                                            class="text-primary">{{ $produk->review ?? 0 }} kali</strong></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
