<div class="modal fade" id="editModal{{$user->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Akun</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('updateManajemen', ["id" => $user->id]) }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="username" class="form-label">Nama Pengguna <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="username" name="username" value="{{ old('username', $user->username) }}" required>
                        <small class="text-muted">Contoh: Ilmu Komputer</small>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Kata Sandi <span class="text-danger">*</span></label>
                        <input type="password" class="form-control" id="password" name="password"  placeholder="password baru">
                        <small class="text-muted">Minimal 8 karakter</small>
                    </div>
                    <div class="mb-3">
                        <label for="role" class="form-label">Role</label>
                        <select class="form-control select " id="role" name="role" required>
                            <option value="admin" {{ old('role', $user->role) == 'admin' ? 'selected' : ''}}>Admin</option>
                            <option value="sub admin" {{ old('role', $user->role) == 'sub admin' ? 'selected' : ''}}>Sub Admin</option>
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