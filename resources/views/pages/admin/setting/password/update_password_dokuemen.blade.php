
<div class="modal fade" id="updateAbstractModal-{{ $Password->id }}" tabindex="-1"
    aria-labelledby="updateAbstractModalLabel-{{ $Password->id }}" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="updateAbstractModalLabel-{{ $Password->id }}">Update Abstrak Peraturan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="form" method="POST" action="{{ route('update.password', ["id" => $Password->id ]) }}">
                    @csrf
                    <div class="mb-3">
                        <label for="password_name" class="form-label">Password Name</label>
                        <input type="text" class="form-control" name="password_name" id="password_name" value="{{ $Password->password_name ?? '-' }}"
                            placeholder="Masukkan Password Name">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password Dokumen</label>
                        <input type="text" class="form-control" name="password" id="password"
                            placeholder="Masukkan Password Dokumen" value="{{ $Password->password ?? '-' }}">
                    </div>
                    {{-- kita masukan user id di table password untuk menghetahui siapa yang membuat password --}}
                    <input type="hidden" name="user_id" value="{{ Auth::id() }}">

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



