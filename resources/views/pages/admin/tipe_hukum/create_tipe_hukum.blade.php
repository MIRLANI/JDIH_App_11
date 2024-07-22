<div class="modal fade" id="addTipeModal" tabindex="-1" aria-labelledby="addTipeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addTipeModalLabel">Tambah Sumber Peraturan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('store.sumber') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Daftar akun</label>
                        <select name="user_id" id="user_id" class="form-select">
                            <option value="">Pilih Akun</option>
                            @foreach ($users as $item)
                                <option value="{{ $item->id }}">{{ $item->email }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Sumber Paraturan</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
