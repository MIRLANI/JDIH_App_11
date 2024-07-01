<div class="modal fade" id="addSubjekModal" tabindex="-1" aria-labelledby="addSubjekModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addSubjekModalLabel">Tambahkan Akun</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('tambahManajemen') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Alamat Email <span class="text-danger">*</span></label>
                        <input type="email" class="form-control" id="email" name="email" required>
                        <small class="text-muted">Contoh: ilkom@gmail.com</small>
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Nama Pengguna <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="username" name="username" required>
                        <small class="text-muted">Contoh: Ilmu Komputer</small>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Kata Sandi <span class="text-danger">*</span></label>
                        <input type="password" class="form-control" id="password" name="password" required>
                        <small class="text-muted">Minimal 8 karakter</small>
                    </div>
                    <div class="mb-3">
                        <label for="role" class="form-label">Role</label>
                        <select class="form-control select " id="role" name="role" required>
                            <option value="sub admin">Sub Admin</option>
                            <option value="admin">Admin</option>
                        </select>
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

