<div class="modal fade" id="addAbstractModal" tabindex="-1" aria-labelledby="addAbstractModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addAbstractModalLabel">Tambah Abstrak Hukum</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-5">
                <form class="form" method="POST" action="{{ route('store.abstrak') }}">
                    @csrf
                    <div class="form-group">
                        <label for="peraturan_id">Peraturan</label>
                        <select class="form-control" name="peraturan_id" required>
                            <option value="">Pilih Peraturan</option>
                            @foreach ($produkHukum as $hukum)
                                <option value="{{ $hukum->id }}"
                                    {{ old('peraturan_id') == $hukum->id ? 'selected' : '' }}>
                                    {{ $hukum->nama }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="title">Nama Abstrak</label>
                        <textarea class="form-control" name="title" id="title" placeholder="Masukkan nama abstrak" required>{{ old('title') }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="materi_pokok">Materi Pokok</label>
                        <textarea class="form-control" id="materi_pokok" name="materi_pokok" rows="3"
                            placeholder="Tuliskan materi pokok abstrak" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="abstrak">Abstrak</label>
                        <textarea class="form-control" id="abstrak" name="abstrak" rows="4"
                            placeholder="Masukkan setiap poin abstrak sebagai item list..." required></textarea>
                        <ul id="abstrakList" class="mt-2"></ul>

                    </div>
                    <div class="form-group">
                        <label for="catatan">Catatan</label>
                        <textarea class="form-control" id="catatan" name="catatan" rows="4"
                            placeholder="Masukkan setiap poin catatan sebagai item list..." required></textarea>
                        <ul id="catatanList" class="mt-2"></ul>
                    </div>
                    
                    <input type="hidden" name="user_id" value="{{ Auth::id() }}" >

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
