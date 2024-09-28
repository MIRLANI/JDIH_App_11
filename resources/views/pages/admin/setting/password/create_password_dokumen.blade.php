<div class="modal fade" id="akseDokumen" tabindex="-1" aria-labelledby="akseDokumenLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-nama" id="akseDokumenLabel">Tambah Password Dokumen</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-5">
                <form class="form" method="POST" action="{{ route('store.password') }}">
                    @csrf
                    <div class="form-group" id="password_name-group">
                        <label for="password_name">Akses Name</label>
                        <input class="form-control" name="password_name" id="password_name"
                            placeholder="Masukkan Password">{{ old('password_name') }}</input>
                    </div>

                    <div class="form-group" id="password-group">
                        <label for="password">Password</label>
                        <input class="form-control" name="password" id="password" placeholder="Masukkan Password" 
                            oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 6);" required>
                        <small class="form-text text-muted">Contoh: 123456</small>
                    </div>

                    <input type="hidden" name="user_id" value="{{ Auth::id() }}">

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
